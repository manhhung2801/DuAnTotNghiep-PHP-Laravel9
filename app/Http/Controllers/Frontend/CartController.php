<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Exception;
use Cart;

class CartController extends Controller
{
    public function index()
    {
        $getCart = \Cart::getContent();
        $subTotal = \Cart::getSubTotal();
        return view('frontend.cart.index', compact('getCart', 'subTotal'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        try {
            $id = $request->id;
            $product = Product::getProductItem($id);
            $qtyProduct = $request->qty ?? 1;
            \Cart::add([
                'id' => $id,
                'name' => $product->name,
                'price' => $product->offer_price,
                'quantity' => $qtyProduct,
                'attributes' => [
                    'color' => 'red',
                ],
                'associatedModel' => $product,
            ]);
            $cart_count = \Cart::getTotalQuantity();
            return response()->json(['status' => true, 'message' => 'Thêm ' . $product->name . ' vào giỏ hàng thành công!', 'cart_count' => $cart_count]);
        } catch (Exception $e) {
            return response()->json(['status' => false, 'message' => 'Có lỗi khi thêm vào giỏ hàng ' . $e]);
        }
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $addCart = \Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->qtyProduct
            ),
        ));
        if($addCart) {
            $summedPrice = number_format(Cart::get($id)->getPriceSum(), 0, '', '.');
            $subTotal = number_format(\Cart::getSubTotal(), 0, '', '.');
            return response()->json(['status' => true, 'message' => 'Cập nhập sản phẩm thành công!', 'summedPrice' => $summedPrice, 'subTotal' => $subTotal]);
        }else {
            return response()->json(['status' => false, 'message' => 'Cập nhập sản phẩm thất bại!']);
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            $removeCart = \Cart::remove($id);
            $subTotal = number_format(\Cart::getSubTotal(), 0, '', '.');

            if ($removeCart === true) {
                return response()->json([
                    'status' => true,
                    'message' => 'Xóa sản phẩm thành công!',
                    'subTotal' => $subTotal
                ], 200);
            }
            return response()->json([
                'status' => false,
                'message' => 'Xóa sản phẩm thất bại!'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Xóa sản phẩm thất bại!' . $e
            ]);
        }
    }
}
