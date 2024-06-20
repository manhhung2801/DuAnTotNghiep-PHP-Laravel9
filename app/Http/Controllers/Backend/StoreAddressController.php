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
        $message = session('message');
        $storeAddress = StoreAddress::latest();
        // search tìm kiếm theo type
        if (!empty($request->get('keyword'))) {
            $storeAddress = StoreAddress::where('store_name', 'like', '%' . $request->get('keyword') . '%')->orWhere('phone', 'like', '%' . $request->get('keyword') . '%');
            if ($storeAddress->count() == 0) {
                session()->flash('message', 'Không tìm thấy bản ghi');
            } else {
                session()->forget('message');
            }
        } else {
            session()->forget('message');
        }
        $storeAddress = $storeAddress->paginate(15);
        return view('admin.store-address.index', compact('storeAddress', 'message'));
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
            'email' => ['required', 'email'],
            'phone' => ['required', 'min:10'],
            'status' => ['required'],
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

        ]);
        $storeAddress->store_name = $request->store_name;
        $storeAddress->address = $request->address;
        $storeAddress->ward = $request->ward;
        $storeAddress->district = $request->district;
        $storeAddress->province = $request->province;
        $storeAddress->email = $request->email;
        $storeAddress->phone = $request->phone;
        $storeAddress->status = $request->status;
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
            'email' => ['required', 'email'],
            'phone' => ['required', 'min:10'],
            'status' => ['required'],
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

        ]);
        $storeAddress =  StoreAddress::find($id);
        $storeAddress->store_name = $request->store_name;
        $storeAddress->address = $request->address;
        $storeAddress->ward = $request->ward;
        $storeAddress->district = $request->district;
        $storeAddress->province = $request->province;
        $storeAddress->email = $request->email;
        $storeAddress->phone = $request->phone;
        $storeAddress->status = $request->status;
        $storeAddress->save();
        // Set a success toast, with a title
        toastr()->success('Cập nhật địa chỉ cửa hàng thành công ','Thành công');
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
        $message = session('message');
        $getStoreAddress = StoreAddress::onlyTrashed()->latest();

        // search tìm kiếm theo type
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $getStoreAddress = $getStoreAddress->where('store_name', 'like', '%' . $request->get('keyword') . '%')->orWhere('phone', 'like', '%' . $request->get('keyword') . '%');
            if ($getStoreAddress->count() == 0) {
                session()->flash('message', 'Không tìm thấy bản ghi');
            } else {
                session()->forget('message');
            }
        } else {
            session()->forget('message');
        }
        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        $getStoreAddress = $getStoreAddress->paginate(15);
        // Nếu $getStoreAddress rỗng
        if ($getStoreAddress->isEmpty()) {
            session()->flash('message', 'Không tìm thấy bản ghi');
            return view('admin.store-address.trash-list', compact('getStoreAddress'));
        }
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
