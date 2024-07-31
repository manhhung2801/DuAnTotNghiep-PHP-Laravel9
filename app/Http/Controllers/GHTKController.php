<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\StoreAddress;
use Illuminate\Http\Request;
use Cart;
use Exception;

class GHTKController extends Controller
{

    public function calculateShipping(Request $request)
    {
        try {
            $weight = 0;
            $carts = \Cart::getContent();
            foreach ($carts as $item) {
                $weight += $item->associatedModel->weight;
            }

            //Lấy ra store lấy hàng
            $getStore = StoreAddress::where('status', 1)->where('pick_store', 1)->first();
            //Call API tính shipping
            $data = [
                "pick_province" => $getStore->province,
                "pick_district" => $getStore->district,
                "pick_ward" => $getStore->ward,
                "pick_address" => $getStore->address ?? '',
                "province" => $request->province,
                "district" => $request->district,
                "ward" =>  $request->wards,
                "address" => $request->adress,
                "transport" => "road",
                "weight" => $weight,
                "value" => 1000,
                "deliver_option" => "none",
                "tags" => [1]
            ];
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://services.giaohangtietkiem.vn/services/shipment/fee?" . http_build_query($data),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_HTTPHEADER => array(
                    "Token: fb71dfceab53db26cb2406e24025261368caca75",
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);

            // Chuyển json thành mảng
            $jsonData = json_decode($response);
            $shipMoney = $jsonData->fee->options->shipMoney;
            return response()->json(['status' => true, 'shipMoney' => $shipMoney]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'Đã xảy ra lỗi' . $e]);
        }
    }

    public function postOrder($id)
    {
        try {
            //Lấy ra địa chỉ cữa hàng để lấy hàng
            $getStore = StoreAddress::where('status', 1)->where('pick_store', 1)->first();

            //Lấy Order
            $getOrder = Order::getOrder($id);

            // Chuyển đổi json của address thành array
            $orderAddress = json_decode($getOrder->order_address);

            //Lấy order detail kèm theo product
            $orderDetails = OrderDetail::where('order_id', $id)->with('product')->get();

            //Thêm product vào mảng
            $products = [];
            foreach ($orderDetails as $orderDeatil) {
                $product = [
                    'name' => $orderDeatil->product_name,
                    'weight' => $orderDeatil->product->weight,
                    'quantity' => $orderDeatil->qty,
                    'product_code' => $orderDeatil->product_id,
                ];
                $products[] = $product;
            }
            //Dữ liệu gửi lên API
            $order = [
                "products" => $products,
                "order" => [
                    "id" => $getOrder->order_code,
                    "pick_name" => $getStore->store_name,
                    "pick_address" => $getStore->address ?? '',
                    "pick_province" => $getStore->province,
                    "pick_district" => $getStore->district,
                    "pick_ward" => $getStore->ward,
                    "pick_tel" => $getStore->phone,
                    "tel" => $getOrder->order_phone,
                    "name" => $getOrder->order_name,
                    "address" => $orderAddress->address ?? '',
                    "province" => $orderAddress->province,
                    "district" => $orderAddress->district,
                    "ward" => $orderAddress->ward,
                    "hamlet" => "Khác",
                    "is_freeship" => 1,
                    "pick_money" => $getOrder->total,
                    "transport" => "road",
                    "value" => 1000,
                    "tags" => [1]
                ]
            ];
            $jsonOrder = json_encode($order);
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://services-staging.ghtklab.com/services/shipment/order",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $jsonOrder,
                CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "Token: fb71dfceab53db26cb2406e24025261368caca75",
                    "Content-Length: " . strlen($jsonOrder),
                ),
            ));
            $response = json_decode(curl_exec($curl));
            curl_close($curl);

            if ($response->success === true) {
                //Lưu trạng thái đơn hàng
                $getOrder->tracking_id = $response->order->tracking_id;
                $getOrder->order_status = $response->order->status_id;
                $getOrder->save();

                //return giá trị
                return response()->json(['status' => true, 'order' => $response->order]);
            }
            // return về nếu success = flase
            return response()->json(['status' => false, 'message' => $response->message, 'error_code' => $response->error_code ?? " "]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function cancelOrder($tracking_id)
    {
        try {
            $checkOrder = Order::where('tracking_id', $tracking_id)->first();
            if ($checkOrder) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://services-staging.ghtklab.com/services/shipment/cancel/" . $tracking_id,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_HTTPHEADER => array(
                        "Token: fb71dfceab53db26cb2406e24025261368caca75",
                    ),
                ));

                $response = json_decode(curl_exec($curl));
                curl_close($curl);

                if ($response->success) {
                    $checkOrder->order_status = -1;
                    $checkOrder->save();
                    return response()->json($response);
                }
                return response()->json($response);
            }
            return response(['status' => false, 'message' => "Đơn hàng không tồn tại"]);
        } catch (Exception $e) {
            return response(['status' => false, 'Đã xảy ra lỗi' . $e]);
        }
    }

    public function statusOrder($tracking_id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://services.giaohangtietkiem.vn/services/shipment/v2/" . $tracking_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_HTTPHEADER => array(
                "Token: APITokenSample-ca441e70288cB0515F310742",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        echo 'Response: ' . $response;
    }
}
