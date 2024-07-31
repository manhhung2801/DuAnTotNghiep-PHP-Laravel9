<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\contact;
use App\Models\Coupons;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\OrderDetail;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductComments;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        if (!empty(\Auth::check()) && \Auth::user()->role == "admin") {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login');
    }
    public function totalRevenue($coutOrder)
    {
        $totalRevenue = 0;
        foreach ($coutOrder as $value) {
            $totalRevenue = $value->total * $value->qty_total;
        }
        return $totalRevenue;
    }

    public function chartCircle($Order)
    {
        $data = [];
        $categories = [];

        foreach ($Order as $item) {
            $Order_detail = OrderDetail::where("order_id", $item->id)->get();

            foreach ($Order_detail as $item_order_detail) {
                $product = Product::where("id", $item_order_detail->product_id)->get();

                foreach ($product as $item_product) {
                    $category = Category::where("id", $item_product->category_id)->first();

                    if ($category) {
                        if (isset($categories[$category->name])) {
                            $categories[$category->name] += $item->qty_total;
                        } else {
                            $categories[$category->name] = $item->qty_total;
                        }
                    }
                }
            }
        }

        foreach ($categories as $category_name => $qty_total) {
            $data[] = [
                'category_name' => $category_name,
                'qty_total' => $qty_total
            ];
        }
        return  $data;
    }
    public function dashboard()
    {

        $countUser = User::get()->count();
        $countProuduct = User::get()->count();
        $countCoupon = Coupons::get()->count();
        $countSlider = Slider::get()->count();
        $countOrder = Order::where('payment_status', 1)->where('order_status',92)->count();
        $countCategory = Category::get()->count();
        $countPost = Post::get()->count();
        $countProductComments = ProductComments::get()->count();
        $countContact = contact::get()->count();

        $countRevenue = Order::where('payment_status', 1)->get();
        $Order = Order::where('payment_status', 1)->get();

        // tông đơn hàng chưa thanh toán 
        $unpaidOrders = Order::where('payment_status', 0)->where('order_status', 0)->count();
        $cancelOrders = Order::where('order_status', -1)->count();

        $totalRevenue = $this->totalRevenue($countRevenue);
        $data = $this->chartCircle($Order);

        return view('admin.dashboard', [
            'countUser' => $countUser,
            'countProuduct' => $countProuduct,
            'countCoupon' => $countCoupon,
            'countSlider' => $countSlider,
            'totalRevenue' => $totalRevenue,
            'countOrder' => $countOrder,
            'countCategory' => $countCategory,
            'countPost' => $countPost,
            'countProductComments' => $countProductComments,
            'countContact' => $countContact,
            'unpaidOrders' => $unpaidOrders,
            'cancelOrders' => $cancelOrders,
            'data' => $data,
        ]);
    }

    public function dashboards(Request $request)
    {


        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $start_date_order = date('Y-m-d', strtotime($start_date));
        $end_date_order = date('Y-m-d', strtotime($end_date));



        $Order = Order::where('payment_status', 1)->where('order_status',92)->whereBetween('created_at', [$start_date_order, $end_date_order])->get();
        // $data= ['start_date_order'=> $start_date_order, 'end_date_order'=> $end_date_order];
        return response(['Order' => $Order]);
    }
}
