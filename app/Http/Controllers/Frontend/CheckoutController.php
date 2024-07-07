<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order_detail;
use App\Models\Order;
use Illuminate\Database\QueryException;
use Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function index()
    {
        if (\Cart::isEmpty()) {
            return redirect()->back()->with(['error' => 'Đơn hàng không được để trống!']);
        }
        $getCart = \Cart::getContent();
        $getSubTotal = number_format(\Cart::getSubTotal(), 0, '', '.');
        $getTotal = number_format(\Cart::getTotal(), 0, '', '.');
        $getTotalQuantity = \Cart::getTotalQuantity();
        return view('frontend.checkout.index', compact('getCart', 'getSubTotal', 'getTotal', 'getTotalQuantity'));
        
    }

    function store(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email|ends_with:@gmail.com',
        //     'name' => 'required',
        //     'phone' => 'required|integer',
        // ]);
        try {
            if (!\Cart::isEmpty()) {
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
                $order->payment_method = $request->payment_method;
                $order->payment_status = $request->payment_method;
                $order->shipping_method = trim($request->shipping_method);
                $order->coupon = trim($request->coupon);
                $order->user_note = trim($request->user_note);
                $order->user_id = \Auth::user()->id;
                $order->save();

                $getCart = \Cart::getContent();
                foreach ($getCart as $key => $product) {
                    $order_detail = new Order_detail();
                    $order_detail->product_name = $product->name;
                    $order_detail->variants = $product->attributes->color;
                    $order_detail->price = $product->price;
                    $order_detail->qty = $product->quantity;
                    $order_detail->order_id = $order->id;
                    $order_detail->product_id = $product->id;
                    $order_detail->save();
                }
                \Cart::clear();
                return view('frontend.thankyou.index');
            }
            return redirect()->back()->with(['error' => 'Đã xảy ra lỗi !!!']);
        } catch (QueryException $e) {
            return redirect()->back()->with(['error' => 'Đã xảy ra lỗi !!!'. $e]);
        }
    }
}
