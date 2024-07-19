<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\VNPayService;

class VNPAYController extends Controller
{
    public $vnpayService;
    public function __construct(
        VNPayService  $vnpayService
    )
    {
        $this->vnpayService = $vnpayService;
    }
    public function vnpay_return(Request $request)
    {
        $returnData = $this->vnpayService->vnpayReturn();
        $responseCode = json_decode($returnData);

        if($responseCode->RspCode == '00') {
            return redirect()->route('thankyou')->with('success', 'Thanh toán đơn hàng thành công.');
        } else {
            return redirect()->route('thankyou')->with('error', 'Thanh toán đơn hàng thất bại.');
        }
    }

    public function retry_payment(Request $request) {
        // Validate the incoming request data
        $request->validate([
            'order_id' => 'required|exists:orders,id',
        ]);

        $order = Order::find($request->order_id);

        if($order && $order->payment_method == 1) {
            $order->payment_status = 0;
            $order->vnp_order_code .= Str::random(2);
            $order->save();
           return $this->vnpayService->vnpayCreatePayment($order->vnp_order_code, $order->total);
        }
    }

}
