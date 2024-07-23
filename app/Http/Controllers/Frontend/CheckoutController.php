<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Coupons;
use App\Http\Controllers\VNPAYController;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Cart;
use Exception;
use Illuminate\Http\Request;
use App\Services\VNPayService;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    function index()
    {
        // kiểm tra đơn hàng trống
        if (\Cart::isEmpty()) {
            return redirect()->back()->with(['error' => 'Đơn hàng không được để trống!']);
        }

        $getCart = \Cart::getContent();
        // Update giá khi có sự thay đổi giá
        foreach ($getCart as $cart) {
            $getProduct = Product::findOrFail($cart->id);
            $productPrice = $getProduct->offer_price ?? $getProduct->price;
            if ($cart->price != $productPrice) {
                \Cart::update($cart->id, [
                    'price' => $productPrice,
                ]);
            }
        }

        $getSubTotal = number_format(\Cart::getSubTotal(), 0, '', '.');
        $getTotal = \Cart::getTotal();
        $getTotalQuantity = \Cart::getTotalQuantity();
        return view('frontend.checkout.index', compact('getCart', 'getSubTotal', 'getTotal', 'getTotalQuantity'));
    }

    function store(Request $request)
    {
        try {
            // thêm order và order detail
            if (!\Cart::isEmpty()) {

                $getCart = \Cart::getContent();
                //check số lượng còn lại trong kho
                foreach ($getCart as $cart) {
                    // lấy ra product từ id trong cart
                    $getQtyProduct = Product::getProductItem($cart->id);
                    if ($cart->quantity > $getQtyProduct->qty) {
                        return redirect()->route('cart.index')->with(['error' => 'Sản phẩm không còn đủ số lượng bạn đặt!']);
                    }
                    // trừ số lượng sản phẩm trong databse
                    $getQtyProduct->qty -= $cart->quantity;
                    $getQtyProduct->save();
                }
                // end check số lương
                $orderCode = Str::random(10);
                //Tính tổng tiền nếu có coupon
                $total_price_input = $request->input('total_price_hidden') ?? 0;
                $total = $total_price_input - $request->input('coupon_value');

                // Cộng 1 lần sử dụng mã coupon
                $couponCode = $request->session()->get('coupon_code') ?? '';
                if ($couponCode) {
                    $getCoupon = Coupons::where('code', $couponCode)->first();
                    if ($getCoupon) {
                        $getCoupon->quantity -= 1;
                        $getCoupon->save();
                    }
                }

                // Thêm order
                $order = new Order();
                $order->vnp_order_code  = $orderCode;
                $order->order_name = trim($request->name);
                $order->order_phone = trim($request->phone);
                $order->order_email = trim($request->email);
                $order->order_province = trim($request->provinces);
                $order->order_district = trim($request->districts);
                $order->order_ward = trim($request->wards);
                $order->order_address = trim($request->address);
                $order->ship_money = $request->input('shipping_money') ?? 0;
                $order->store_address = $request->store_address ?? '';
                $order->total = $total;
                $order->qty_total = \Cart::getTotalQuantity();
                // thanh toán
                $order->payment_method = $request->payment_method;
                $order->payment_status = 0;
                $order->shipping_method = trim($request->shipping_method);
                $order->order_status = 0;
                $order->coupon = $couponCode;
                $order->user_note = trim($request->user_note);
                $order->user_id = \Auth::user()->id;
                $order->save();


                //Thên order detail
                foreach ($getCart as $key => $proCart) {
                    $order_detail = new OrderDetail();
                    $order_detail->product_name = $proCart->name;
                    $order_detail->variants = $proCart->attributes;
                    $order_detail->price = $proCart->price;
                    $order_detail->qty = $proCart->quantity;
                    $order_detail->order_id = $order->id;
                    $order_detail->product_id = $proCart->id;
                    $order_detail->save();
                }
                // xóa toàn bộ giỏ hàng
                \Cart::clear();

                if ($request->payment_method == 1) {
                    $vnpayService = new VNPayService();
                    return $vnpayService->vnpayCreatePayment($order->vnp_order_code, $order->total);
                }
                return view('frontend.thankyou.index');
            }
            return redirect()->back()->with(['error' => 'Không tìm thấy sản phẩm trong giỏ hàng!']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => 'Đã xảy ra lỗi xảy trong quá trình thanh toán. Vui lòng liên hệ cho chúng tôi!']);
        }
    }

    function applyCouponCode(Request $request)
    {
        $coupon_code = $request->coupon_code;

        Session::forget('coupon_code');
        Session::forget('discount_amount');

        $total_cart = $request->total_cart;
        $check_coupon_code = $this->checkCouponCode($coupon_code, $total_cart);

        if ($check_coupon_code == -1) {
            return response()->json(['status' => false, 'message' => 'Mã giảm giá đã hết lượt sử dụng!']);
        }
        if ($check_coupon_code == 0) {
            return response()->json(['status' => false, 'message' => 'Mã giảm giá không đúng hoặc không tồn tại']);
        }
        if ($check_coupon_code > 0) {
            Session::put('coupon_code', $coupon_code);
            Session::put('discount_amount', $check_coupon_code);
            $newTotal = $total_cart - $check_coupon_code;

            return response()->json(['status' => true, 'newTotal' => $newTotal]);
        }
        // return response()->json($check_coupon_code);
        return response()->json(['status' => false]);
    }

    //function xử lý mã giảm giá 
    private function checkCouponCode($coupon_code, $total_cart)
    {
        $currentDate = date('Y-m-d H:i:s');
        $couponCode = Coupons::checkCouponCode($coupon_code);

        // Kiểm tra có tồn tại hay không
        if (!$couponCode) {
            return 0;
        }

        //Nếu code tồn tại
        if ($couponCode) {

            //Kiểm tra ngày đã đến ngày chưa hay đã hết hạn
            if ($couponCode->end_date <= $currentDate || $couponCode->start_date >= $currentDate) {
                return 1;
            }
            // // kiểm tra số lượng
            if ($couponCode->quantity <= 0) {
                return -1;
            }

            //Khỏi tạo giá trị ban đầu
            $discountAmount = 0;
            //Kiểm tra loại và tính toán giảm giá theo phần trăm hay cố định
            if ($couponCode->coupon_type === 'precent') {
                //tính số tiền được giảm trên số % giảm của tổng tiền
                $discountAmount = ($couponCode->precent_amount / 100) * $total_cart;
            } elseif ($couponCode->coupon_type === 'amount') {
                //Nếu số tiền được giảm nhiều hơn số tiền tổng đơn hàng thì lấy số tiền được giảm -> tránh số tiền giảm nhiều hơn đơn hàng
                $discountAmount = min($couponCode->precent_amount, $total_cart);
            }
            //Kết quả trả về luôn lơn hơn 0
            return max(0, $discountAmount);
        }
    }
}
