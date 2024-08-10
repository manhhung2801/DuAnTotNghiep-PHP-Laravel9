<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
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

        return response(['message' =>  $message, 'vnp_refund_status' => $order->vnp_refund_status]);
    }
    public function index()
    {
        $getOrders = Order::query(); // Khởi tạo query builder

        //tìm kiếm 
        if(!empty(Request()->get('keyword'))){
            $kw = trim(Request()->get('keyword'));
            $getOrders->where('order_code', 'like', '%'. $kw . '%')
                      ->orWhere('order_phone', 'like', '%' . $kw . '%');
        }
        // Sắp xếp theo giá
        if (!empty(Request()->get('sort_price'))) {
            $sort_price = trim(Request()->get('sort_price'));
            if ($sort_price === 'asc' || $sort_price === 'desc') {
                $getOrders->orderBy('total', $sort_price);
            } 
            else {
                return view('404');
            }
        }

        // Xử lý lọc theo trạng thái đơn hàng
        $order_status = Request()->get('order_status');
        $validStatuses = [-1, 90, 91, 92]; // Các giá trị hợp lệ
        if ($order_status !== null && in_array($order_status, $validStatuses)) {
            $getOrders->where('order_status', $order_status);
        } elseif ($order_status !== null) {
            return view('404'); // Trả về view lỗi nếu giá trị không hợp lệ
        }

        // Lọc theo phương thức thanh toán
        if (!empty(Request()->get('sort_payment'))) {
            $sort_payment = (int) trim(Request()->get('sort_payment'));
            if (in_array($sort_payment, [0, 1])) {
                $getOrders->where('payment_method', $sort_payment);
            } else {
                return view('404');
            }
        }

        // Sắp xếp theo ngày tạo
        if (!empty(Request()->get('sort_date'))) {
            $sort_date = trim(Request()->get('sort_date'));
            if ($sort_date == 'desc' || $sort_date == 'asc') {
                $getOrders->orderBy('created_at', $sort_date);
            } else {
                return view('404');
            }
        }else {
            $getOrders->orderBy('created_at', 'desc');
        }

        // Lấy kết quả và phân trang
        $getOrders = $getOrders->paginate(15)->appends(request()->query()); // Phân trang với số lượng bản ghi trên mỗi trang là 10

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
        $getOrderDetail = OrderDetail::with('product')->where('order_id', '=', $id)->get();
        return response()->json(['getOrderDetail' => $getOrderDetail]);
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
        if (isset($request->orderStatus)) {
            $orderStatus  = $request->orderStatus;
            $order = Order::findOrFail($id);
            $order->order_status = $orderStatus;
            $order->save();
            return response()->json(['status' => true, 'message' => 'Cập nhập thành công']);
        }
        if (isset($request->adminNote)) {
            $adminNote = $request->adminNote;
            $order = Order::findOrFail($id);
            $order->admin_note = $adminNote;
            $order->save();
            $admin_note = $order->admin_note;
            return response()->json(['status' => true, 'message' => 'Cập nhập thành công', 'adminNote' => $admin_note]);
        }
        return response()->json(['status' => false, 'message' => 'Cập nhập thất bại!' . $request->orderStatus]);
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
