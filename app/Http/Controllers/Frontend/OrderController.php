<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Coupons;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderEmail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idUser = \Auth::user()->id;
        $getOrders = Order::getOrderUser($idUser)->orderBy('created_at', 'desc')->paginate(10);
        return view('frontend.dashboard.page.orders', compact('getOrders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getOrderDetail = OrderDetail::where('order_id', '=', $id)->get();
        $getOrder = Order::getOrder($id);
        $getCoupon = Coupons::where('code', $getOrder->coupon)->first();
        return view('frontend.dashboard.page.order-detail', compact('getOrderDetail', 'getOrder', 'getCoupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::getOrder($id);

        if ($order == true) {
            $refundQty = OrderDetail::where('order_id', $id)->get();
            foreach ($refundQty as $re) {
                $product = Product::findOrFail($re->product_id);
                if ($product->id == $re->product_id) {
                    $product->qty += $re->qty;
                }
                $product->save();
            }

            $order->order_status = -1;
            $order->order_status_text = "Đơn hàng đã hủy";
            $order->save();

            if($order->order_status == -1 && $order->payment_method == 1 && $order->payment_status == 1 && $order->vnp_transaction_id !== null) {
                $order->vnp_refund_status = 'Pending';
                $order->save();
            }

            //Gửi mail
            try {
                $getOrderDetail = OrderDetail::where('order_id', $id)->get();
                $subject = 'Đơn hàng '.$order->order_code.' từ Cybermart đã bị hủy';
                $orderEmail = new OrderEmail($getOrderDetail, $order, $getCoupon ?? null, $subject);
                Mail::to($order->order_email)->send($orderEmail);
            } catch (\Exception $e) {
                \Log::error('Error sending order email: ' . $e->getMessage());
                return redirect()->back()->with(['error' => 'Lỗi gửi email: ' . $e->getMessage()]);
            }


            return response()->json(['status' => true, 'message' => 'Hủy đơn hàng thành công!']);
        }
        return response()->json(['status' => false, 'message' => 'Hủy đơn hàng thất bại!']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
