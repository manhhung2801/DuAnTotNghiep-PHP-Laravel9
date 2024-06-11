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
                session()->flash('message', 'Record Not Found');
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
            'store_name' => ['required'],
            'address' => ['required'],
            'ward' => ['required'],
            'district' => ['required'],
            'province' => ['required'],
            'email'=>['required'],
            'phone' => ['required'],
            'status' => ['required'],
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
        toastr()->success('Admin successfully added storeAddress');
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
            'store_name' => ['required'],
            'address' => ['required'],
            'ward' => ['required'],
            'district' => ['required'],
            'province' => ['required'],
            'email'=>['required'],
            'phone' => ['required'],
            'status' => ['required'],
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
        toastr()->success('Admin updated slider successfully');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $storeAddress = StoreAddress::find($id);

        $storeAddress->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
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
                session()->flash('message', 'Record Not Found');
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
            session()->flash('message', 'Record Not Found');
            return view('admin.store-address.trash-list', compact('getStoreAddress'));
        }
        // Trả về view với dữ liệu các category đã bị xóa
        return view('admin.store-address.trash-list', compact('getStoreAddress'));
    }
    public function destroyTrash($id)
    {
        try {
            StoreAddress::destroyTrashedItem($id);
            return response(['status' => 'success', 'Deleted Forever Successfully!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'Deleted Faild! ' . $e . '']);
        }
    }
    public function restoreTrash($id)
    {
        try {
            StoreAddress::restoreTrashed($id);
            return response(['status' => 'success', 'Successfully!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'message' => 'Restore Faild ' . $e . '']);
        }
    }

    public function changeStatus(Request $request)
    {
        $storeAddress = StoreAddress::findOrFail($request->id);
        $storeAddress->status = $request->status == 'true' ? 1 : 0;
        $storeAddress->save();
        return response(['message' => 'Status has been updated']);
    }
}
