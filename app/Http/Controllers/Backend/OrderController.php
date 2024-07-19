<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function VNPRefundStatusUpdate(Request $request) {
        $order = Order::find($request->orderId);
        $order->vnp_refund_status =  $request->vnpRefundStatus;
        $order->save();

        $message = '';

        if($order->vnp_refund_status == 'Pending') {
            $message = 'Chờ phê duyệt hoàn tiền';
        }elseif($order->vnp_refund_status == 'Processing') {
            $message = 'Đang xử lý hoàn tiền';
        }
        elseif($order->vnp_refund_status == 'Refunded') {
            $message = 'Đã hoàn tiền';
        }
        elseif($order->vnp_refund_status == 'Refund_Failed') {
            $message = 'Hoàn tiền không thành công';
        }

        return response(['message' =>  $message]);
    }
    public function index()
    {
        $getOrders = Order::getOrderAll()->paginate(15);
        return view('admin.order.index', compact('getOrders'));
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
        // $getOrderDetail = Order_detail::where('order_id', '=', $id)->get();
        $getOrderDetail = Order_detail::with('product')->where('order_id', '=', $id)->get();
        return response()->json(['getOrderDetail'=>$getOrderDetail]);
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
        $orderStatus  = $request->orderStatus;
        $order = Order::findOrFail($id);
        $order->order_status = $orderStatus;
        $order->save();
        return response()->json(['status' => true, 'message' => 'Cập nhập thành công']);
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
