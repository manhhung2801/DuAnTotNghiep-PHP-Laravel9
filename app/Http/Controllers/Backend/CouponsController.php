<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupons;
use App\Http\Requests\ruleProductCreate;
use Illuminate\Validation\ValidationException;
use Exception;
use Illuminate\Support\Str;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $coupons = Coupons::latest();
        // search tìm kiếm theo type
        if (!empty($request->get('keyword'))) {
            $coupons = Coupons::where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        $coupons = $coupons->paginate(15);
        return view("admin.coupons.index", compact('coupons'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Coupons = new Coupons;
        $request->validate([
            'name' => ['required', 'max:20'],
            'code' => ['required', 'max:10'],
            'quantity' => ['required', 'numeric'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'discount_type' => ['required'],
            'prencent_amount' => ['required', 'numeric'],

            'status' => ['required'],

        ], [
            'name.required' => 'Tên không được để trống.',
            'name.max' => 'Không vượt quá 20 ký tự.',
            'code.required' => 'Mã giảm giá không được để trống.',
            'code.max' => 'Không vượt quá 10 ký tự.',

            'quantity.required' => 'Số lượng không được để trống.',
            'start_date.required' => 'Ngày bắt đầu không được để trống.',
            'end_date.required' => 'Ngày cuối không được để trống.',
            'end_date.required' => 'Ngày cuối không được để trống.',
            'discount_type.required' => 'Loại giảm giá không được để trống.',
            'prencent_amount.required' => 'Giảm giá không được để trống.',


        ]);
        $Coupons->name = $request->name;
        $Coupons->code = $request->code;
        $Coupons->quantity = $request->quantity;
        $Coupons->start_date = $request->start_date;
        $Coupons->end_date = $request->end_date;
        $Coupons->discount_type = $request->discount_type;
        $Coupons->prencent_amount = $request->prencent_amount;
        $Coupons->status = $request->status;
        $Coupons->save();

        toastr()->success('Tạo mới thành công!', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $Coupons = Coupons::findOrFail($id);
        $Coupons = Coupons::getCouponsItem($id);
        return view('admin.coupons.edit', compact('Coupons'));
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
        $Coupons = Coupons::find($id);

        $request->validate([
            'name' => ['required', 'max:20'],
            'code' => ['required', 'max:10'],
            'quantity' => ['required', 'numeric'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'discount_type' => ['required'],
            'prencent_amount' => ['required', 'numeric'],

            'status' => ['required'],

        ], [
            'name.required' => 'Tên không được để trống.',
            'name.max' => 'Không vượt quá 20 ký tự.',
            'code.required' => 'Mã giảm giá không được để trống.',
            'code.max' => 'Không vượt quá 10 ký tự.',

            'quantity.required' => 'Số lượng không được để trống.',
            'start_date.required' => 'Ngày bắt đầu không được để trống.',
            'end_date.required' => 'Ngày cuối không được để trống.',
            'end_date.required' => 'Ngày cuối không được để trống.',
            'discount_type.required' => 'Loại giảm giá không được để trống.',
            'prencent_amount.required' => 'Giảm giá không được để trống.',


        ]);
        $Coupons->name = $request->name;
        $Coupons->code = $request->code;
        $Coupons->quantity = $request->quantity;

        $Coupons->start_date = $request->start_date;
        $Coupons->end_date = $request->end_date;
        $Coupons->discount_type = $request->discount_type;
        $Coupons->prencent_amount = $request->prencent_amount;

        $Coupons->status = $request->status;


        $Coupons->update();
        toastr()->success('Cập nhật thành công!', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $Coupons = Coupons::find($id);
        // $Coupons->delete();
        // return response(['status' => 'success', 'Deleted Successfully!']);


        try {
            Coupons::findOrFail($id)->delete();

            return response(['status' => 'success', 'Deleted Successfully!']);
        } catch (ValidationException $e) {
            toastr()->error('Lỗi: ' . $e);
        }
    }

    public function changeStatus(Request $request)
    {

        $Coupons = Coupons::findOrFail($request->id);
        $Coupons->status = $request->status == 'true' ? 1 : 0;
        $Coupons->save();
        return response(['message' => 'Status has been updated']);
    }



    public function showTrash(Request $request)
    {
        $getCoupons = Coupons::onlyTrashed()->latest();
        // search tìm kiếm theo type
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $getCoupons = $getCoupons->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        $getCoupons = $getCoupons->paginate(15);

        // Trả về view với dữ liệu các category đã bị xóa
        return view('admin.coupons.trash-list', compact('getCoupons'));
    }


    public function destroyTrash($id)
    {
        try {
            Coupons::destroyTrashedItem($id);
            return response(['status' => 'success', 'Deleted Forever Successfully!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'Deleted Faild! ' . $e . '']);
        }
    }

    public function restoreTrash($id)
    {
        try {
            Coupons::restoreTrashed($id);
            return response(['status' => 'success', 'Successfully!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'message' => 'Restore Faild ' . $e . '']);
        }
    }
}
