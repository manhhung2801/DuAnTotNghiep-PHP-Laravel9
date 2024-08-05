<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Variant;
use App\Models\VariantItem;
use Illuminate\Http\Request;
use Exception;
use Cart;
use Helper;

class CartController extends Controller
{
    public function index()
    {
        $getCart = \Cart::getContent();
        $subTotal = \Cart::getSubTotal();
        foreach ($getCart as $cart) {
            $getProduct = Product::findOrFail($cart->id);

            //Kiểm tra xem sản phẩm đó lỡ ẩn đi nếu sản phẩm còn trong cart
            if ($getProduct->status === 0) {
                \Cart::remove($cart->id);
            }

            //Kiểm tra giá thay đổi
            $productPrice = Helper::getProductPrice($getProduct);
            if ($cart->price != $productPrice) {
                \Cart::update($cart->id, [
                    'price' => $productPrice,
                ]);
            }
            \Cart::update($cart->id, [
                'associatedModel' => $getProduct,
            ]);
        }
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
            // Nếu sản phẩm có tồn tại
            if ($product) {
                $qtyProduct = $request->qty ??  1;

                //Check số lượng trong cart so với số lướng sản phẩm
                $getCart = \Cart::getContent();
                foreach ($getCart as $item) {
                    // lấy số lượng trong cart + với quatity thêm vào check với qty của product
                    if ($product->id == $item->id) {
                        $qtyAdd = $item->quantity + $qtyProduct;
                        if ($product->qty <  $qtyAdd) {
                            return response()->json(['status' => false, 'message' => 'Bạn đã mua vượt quá số sản phẩm trong kho!']);
                        }
                    }
                }

                // thêm variant
                $attributes = [];
                if (!empty($request->variants)) {
                    foreach ($request->variants as $variant) {
                        if ($variant != null) {
                            $getVariant = VariantItem::with('variant')->findOrFail($variant);
                            if ($getVariant) {
                                $attributes[$getVariant->variant->name] = $getVariant->name;
                            }
                        }
                    }
                }

                //Kiểm tra giá sản phẩm
                $productPrice = Helper::getProductPrice($product);
                //Thêm giỏ hàng
                $addCart = \Cart::add([
                    'id' => $id,
                    'name' => $product->name,
                    'price' => $productPrice,
                    'quantity' => $qtyProduct,
                    'attributes' => $attributes,
                    'associatedModel' => $product,
                ]);
                // lấy ra số lượng
                $cart_count = \Cart::getTotalQuantity();
                return response()->json(['status' => true, 'message' => 'Thêm ' . $product->name . ' vào giỏ hàng thành công!', 'cart_count' => $cart_count, 'abc' => $request->variants]);
            }
            return response()->json(['status' => false, 'message' => 'Sản phẩm không tồn tại!'], 404);
        } catch (Exception $e) {
            return response()->json(['status' => false, 'message' => 'Đã xảy ra lỗi vui lòng thử lại sau!']);
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
        if ($addCart) {
            $summedPrice = number_format(Cart::get($id)->getPriceSum(), 0, '', '.');
            $subTotal = number_format(\Cart::getSubTotal(), 0, '', '.');
            $cart_count = \Cart::getTotalQuantity();
            return response()->json(['status' => true, 'message' => 'Cập nhập sản phẩm thành công!', 'summedPrice' => $summedPrice, 'subTotal' => $subTotal, 'cart_count' => $cart_count]);
        } else {
            return response()->json(['status' => false, 'message' => 'Cập nhập sản phẩm thất bại!'], 404);
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            $removeCart = \Cart::remove($id);
            $subTotal = number_format(\Cart::getSubTotal(), 0, '', '.');
            $cart_count = \Cart::getTotalQuantity();
            if ($removeCart === true) {
                return response()->json([
                    'status' => true,
                    'message' => 'Xóa sản phẩm thành công!',
                    'subTotal' => $subTotal,
                    'cart_count' => $cart_count,
                ], 200);
            }
            return response()->json([
                'status' => false,
                'message' => 'Không tìm thấy sản phẩm trong giỏ hàng!'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Xóa sản phẩm thất bại!' . $e
            ]);
        }
    }
}
