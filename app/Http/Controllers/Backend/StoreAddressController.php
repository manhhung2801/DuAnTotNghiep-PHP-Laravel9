<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StoreAddress;
use Exception;

class StoreAddressController extends Controller
{
    public function index(Request $request)
    {
        $storeAddress = StoreAddress::query();
        // search tìm kiếm theo type
        if (!empty($request->get('keyword'))) {
            $storeAddress = StoreAddress::where('store_name', 'like', '%' . $request->get('keyword') . '%')->orWhere('phone', 'like', '%' . $request->get('keyword') . '%');
        }
        
        // Sắp xếp theo trạng thái
        if ($request->filled('check_status')) {
            $check_status = $request->get('check_status');
            if ($check_status == '1') {
                $storeAddress = $storeAddress->where('status', 1);
            } elseif ($check_status == '0') {
                $storeAddress = $storeAddress->where('status', 0);
            }
        }

        // Sắp xếp theo ngày tạo
        if ($request->filled('sort_date')) {
            $sort_date = $request->get('sort_date');
            if ($sort_date === 'asc' || $sort_date === 'desc') {
                $storeAddress->orderBy('created_at', $sort_date);
            }
        }
        //phân trang
        $storeAddress = $storeAddress->paginate(15)->appends(request()->query());
        return view('admin.store-address.index', compact('storeAddress'));
    }



    public function create()
    {
        return view('admin.store-address.create');
    }


    public function store(Request $request)
    {
        $storeAddress = new StoreAddress;
        $request->validate([
            'store_name' => ['required', 'string', 'max:200'],
            'address' => ['required'],
            'ward' => ['required'],
            'district' => ['required'],
            'province' => ['required'],
            'description' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'min:10',],
            'status' => ['required'],
            'pick_store' => ['required'],
        ], [
            'store_name.required' => 'Tên công ty không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'ward.required' => 'Phường, xã không được để trống',
            'district.required' => 'Quận, huyện không được để trống',
            'province.required' => 'Tỉnh, thành phố không được để trống',
            'email.required' => 'Email không được để trống',
            'description.required' => 'Mô tả không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'pick_store.required' => 'Cửa hàng không được để trống',
            // 'phone.regex' => 'Số điện thoại bắt đầu bằng 0',
            'phone.min' => 'Số điện thoại tối thiểu 11 số',

        ]);
        $storeAddress->store_name = $request->store_name;
        $storeAddress->address = $request->address;
        $storeAddress->ward = trim($request->ward);
        $storeAddress->district = trim($request->district);
        $storeAddress->description = $request->description;
        $storeAddress->province = trim($request->province);
        $storeAddress->email = $request->email;
        $storeAddress->phone = $request->phone;
        $storeAddress->status = $request->status;
        $storeAddress->pick_store = $request->pick_store;
        $storeAddress->save();
        // Set a success toast, with a title
        toastr()->success('Thêm địa chỉ cửa hàng thành công!', 'Thành Công');
        return redirect()->back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $storeAddress = StoreAddress::findOrFail($id);
        return view('admin.store-address.edit', compact('storeAddress'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'store_name' => ['required', 'string', 'max:200'],
            'address' => ['required'],
            'ward' => ['required'],
            'district' => ['required'],
            'province' => ['required'],
            'description' => ['required'],
            'email' => ['required', 'email'],
            'description.required' => 'Mô tả không được để trống',
            'phone' => ['required', 'min:10'],
            'status' => ['required'],
            'pick_store' => ['required'],
        ], [
            'store_name.required' => 'Tên công ty không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'ward.required' => 'Phường, xã không được để trống',
            'district.required' => 'Quận, huyện không được để trống',
            'province.required' => 'Tỉnh, thành phố không được để trống',
            'email.required' => 'Email không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            // 'phone.regex' => 'Số điện thoại bắt đầu bằng 0',
            'phone.min' => 'Số điện thoại tối thiểu 10 số',
            'pick_store.required' => 'Cửa hàng không được để trống',

        ]);
        $storeAddress =  StoreAddress::find($id);
        $storeAddress->store_name = $request->store_name;
        $storeAddress->address = $request->address;
        $storeAddress->ward = trim($request->ward);
        $storeAddress->district = trim($request->district);
        $storeAddress->description = $request->description;
        $storeAddress->province = trim($request->province);
        $storeAddress->email = $request->email;
        $storeAddress->phone = $request->phone;
        $storeAddress->status = $request->status;
        $storeAddress->save();
        // Set a success toast, with a title
        toastr()->success('Cập nhật địa chỉ cửa hàng thành công ', 'Thành công');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $storeAddress = StoreAddress::find($id);

        $storeAddress->delete();
        return response(['status' => 'success', 'message' => 'Xoá thành công!']);
    }

    public function showTrash(Request $request)
    {
        $getStoreAddress = StoreAddress::onlyTrashed()->latest();

        // search tìm kiếm theo type
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $getStoreAddress = $getStoreAddress->where('store_name', 'like', '%' . $request->get('keyword') . '%')->orWhere('phone', 'like', '%' . $request->get('keyword') . '%');
        }
        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        $getStoreAddress = $getStoreAddress->paginate(15);
        // Trả về view với dữ liệu các category đã bị xóa
        return view('admin.store-address.trash-list', compact('getStoreAddress'));
    }
    public function destroyTrash($id)
    {
        try {
            StoreAddress::destroyTrashedItem($id);
            return response(['status' => 'success', 'Xóa vĩnh viễn thành công!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'Xóa vĩnh viễn thất bại! ' . $e . '']);
        }
    }
    public function restoreTrash($id)
    {
        try {
            StoreAddress::restoreTrashed($id);
            return response(['status' => 'success', 'Khôi phục thành công!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'message' => 'Khôi phục thất bại ' . $e . '']);
        }
    }

    public function changeStatus(Request $request)
    {
        $storeAddress = StoreAddress::findOrFail($request->id);
        $storeAddress->status = $request->status == 'true' ? 1 : 0;
        $storeAddress->save();
        return response(['message' => 'Trạng thái đã được cập nhật']);
    }
}
