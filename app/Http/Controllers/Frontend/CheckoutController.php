<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order_detail;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\QueryException;
use Cart;
use Illuminate\Http\Request;

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
        $getTotal = number_format(\Cart::getTotal(), 0, '', '.');
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

                $order = new Order();
                $order->order_name = trim($request->name);
                $order->order_phone = trim($request->phone);
                $order->order_email = trim($request->email);
                $order->order_province = trim($request->provinces);
                $order->order_district = trim($request->districts);
                $order->order_ward = trim($request->wards);
                $order->order_address = trim($request->address);
                $order->total = \Cart::getTotal();
                $order->qty_total = \Cart::getTotalQuantity();
                // thanh toán
                $order->payment_method = $request->payment_method;
                $order->payment_status = $request->payment_method;
                $order->shipping_method = trim($request->shipping_method);
                $order->coupon = trim($request->coupon);
                $order->user_note = trim($request->user_note);
                $order->user_id = \Auth::user()->id;
                $order->save();

                foreach ($getCart as $key => $proCart) {
                    $order_detail = new Order_detail();
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
                return view('frontend.thankyou.index');
            }
            return redirect()->back()->with(['error' => 'Đã xảy ra lỗi !!!']);
        } catch (QueryException $e) {
            return redirect()->back()->with(['error' => 'Đã xảy ra lỗi !!!' . $e]);
        }
    }
}
