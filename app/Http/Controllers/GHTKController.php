<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;

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

            //Call API tính shipping
            $data = [
                "pick_province" => "TP. Hồ Chí Minh",
                "pick_district" => "TP. Thủ Đức",
                "pick_address" => "501 Kha Vạn Cân, P. Linh Đông",
                "province" => $request->province,
                "district" => $request->district,
                "ward" =>  $request->wards,
                "address" => $request->adress,
                "transport" => "fly",
                "weight" => $weight,
                "value" => 0,
                "deliver_option" => "none",
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
}
