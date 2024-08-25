<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\contact;
use App\Models\Coupons;
use App\Models\Order;
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
            $totalRevenue += $value->total;
        }
        return $totalRevenue;
    }
    public function chartArea($Orders)
    {
        foreach ($Orders as $order) {
            $orderDetails = OrderDetail::where('order_id', $order->id)->get();
            $productNames = $orderDetails->pluck('product_name')->toArray();

            $order->product_names = $productNames;
        }

        return $Orders;
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
        $countProuduct = Product::count();
        $countPost = Post::count();
        $countOrder = Order::count();
        $countCoupon = Coupons::count();
        $countUser = User::where('role', 'user')->count();
        $countSlider = Slider::count();
        $countCategory = Category::count();
        $countProductComments = ProductComments::count();
        $countContact = contact::get()->count();

        $countRevenue = Order::where('order_status', 92)->orWhere('order_status', 5)->orWhere('order_status', 6)
            ->whereIn('payment_status', [0, 1])
            ->whereIn('shipping_method', [0, 1])->get();

        $Order = Order::where('payment_status', 1)->where('payment_status', 1)
            ->orWhere('payment_status', 0)->get();

        // tông đơn hàng chưa thanh toán 
        $unpaidOrders = Order::where('payment_status', 0)->where('order_status', 0)->count();
        $cancelOrders = Order::where('order_status', -1)->count();

        $totalRevenue = $this->totalRevenue($countRevenue);
        $data = $this->chartCircle($Order);

        // Lượt views sản phẩm và bài viết
        $product_views = Product::orderBy('views', 'DESC')->take(21)->get();
        $post_views = Post::orderBy('post_views', 'DESC')->take(10)->get();

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
            'product_views' => $product_views,
            'post_views' => $post_views,
        ]);
    }


    public function dashboards(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $start_date_order = date('Y-m-d', strtotime($start_date));
        $end_date_order = date('Y-m-d', strtotime($end_date));

        $Orderss =  Order::where('order_status', 92)->orWhere('order_status', 5)->orWhere('order_status', 6)
            ->whereIn('payment_status', [0, 1])
            ->whereIn('shipping_method', [0, 1])
            ->whereBetween('created_at', [$start_date_order, $end_date_order])
            ->get();



        $unpaidOrdersCharts = Order::where(function ($query) {
            $query->where('order_status', -1)
                ->where('payment_status', 0)
                ->orWhere('payment_status', 1)
                ->where('vnp_refund_status', 'Refunded')
                ->where('shipping_method', 1)
                ->orWhere('shipping_method', 0);
        })
            ->whereBetween('created_at', [$start_date_order, $end_date_order])
            ->get();


        $Orders = $this->chartArea($Orderss);
        $unpaidOrdersChart = $this->chartArea($unpaidOrdersCharts);

        return response()->json(['Orders' => $Orders, 'unpaidOrdersChart' => $unpaidOrdersChart]);
    }


    public function chartPie(Request $request)
    {

        $startDate_piecharts = $request->input('startDate_piecharts');
        $endDate_piecharts = $request->input('endDate_piecharts');

        $Order = Order::where('order_status', 92)->orWhere('order_status', 5)->orWhere('order_status', 6)
        ->whereIn('payment_status', [0, 1])
        ->whereIn('shipping_method', [0, 1])
            ->whereBetween('created_at', [$startDate_piecharts, $endDate_piecharts])
            ->get();
        $datas = $this->chartCircle($Order);

        return response()->json(['datas' => $datas]);
    }


    public function chartPieDate(Request $request)
    {
        $startDate_piecharts = $request->startDate_piecharts;
        $endDate_piecharts = $request->endDate_piecharts;
        $Order = Order::where('order_status', 92)->orWhere('order_status', 5)->orWhere('order_status', 6)
        ->whereIn('payment_status', [0, 1])
        ->whereIn('shipping_method', [0, 1])
            ->whereBetween('created_at', [$startDate_piecharts, $endDate_piecharts])
            ->get();
        $datas = $this->chartCircle($Order);

        return response()->json(['datas' => $datas]);
    }

    public function chartCountDate(Request $request)
    {


        $startDate_countCharts = $request->input('startDate_countCharts');
        $endDate_countCharts = $request->input('endDate_countCharts');

        $countOrder = Order::whereBetween('created_at', [$startDate_countCharts, $endDate_countCharts])->count();
        $unpaidOrders = Order::where('payment_status', 0)->where('order_status', 0)->whereBetween('created_at', [$startDate_countCharts, $endDate_countCharts])->count();
        $cancelOrders = Order::where(function ($query) {
            $query->where('order_status', -1)
                ->where('payment_status', 0);
        })
            ->whereBetween('created_at', [$endDate_countCharts, $startDate_countCharts])->count();

        $countRevenue = Order::where('order_status', 92)
        ->whereIn('payment_status', [0, 1])
        ->whereIn('shipping_method', [0, 1])->whereBetween('created_at', [$startDate_countCharts, $endDate_countCharts])->get();

        $totalRevenue = $this->totalRevenue($countRevenue);
        $countCoupon = Coupons::whereBetween('created_at', [$startDate_countCharts, $endDate_countCharts])->count();

        $countUser = User::whereBetween('email_verified_at', [$startDate_countCharts, $endDate_countCharts])->count();
        // $countCategory = Category::whereBetween('created_at', [$startDate_countCharts, $endDate_countCharts])->count();
        $countPost = Post::whereBetween('created_at', [$startDate_countCharts, $endDate_countCharts])->count();
        $countProductComments = ProductComments::whereBetween('created_at', [$startDate_countCharts, $endDate_countCharts])->count();
        $countContact = contact::whereBetween('created_at', [$startDate_countCharts, $endDate_countCharts])->count();

        $datas = [
            'countOrder' => $countOrder,
            'unpaidOrders' => $unpaidOrders,
            'cancelOrders' => $cancelOrders,
            'totalRevenue' => $totalRevenue,
            'countCoupon' => $countCoupon,
            'countUser' => $countUser,
            // 'countCategory' => $countCategory,
            'countPost' => $countPost,
            'countProductComments' => $countProductComments,
            'countContact' => $countContact,
        ];
        return response()->json(['datas' => $datas]);
    }
}
