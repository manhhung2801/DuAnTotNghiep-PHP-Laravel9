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

        $coupons = Coupons::getCoupons();
        if(!empty($request->get('keyword'))) {
            $coupons = $coupons->where('name', 'like', '%'.$request->get('keyword').'%');
        }
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
            'name' => ['required'],
            'code' => ['required'],
            'quantity' => ['required', 'numeric'],
            'max_use' => ['required', 'numeric'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'discount_type' => ['required'],
            'discount' => ['required', 'numeric'],
            'total_used' => ['required', 'numeric'],
            'status' => ['required'],

        ]);

        $Coupons->name = $request->name;
        $Coupons->code = $request->code;
        $Coupons->quantity = $request->quantity;
        $Coupons->max_use = $request->max_use;
        $Coupons->start_date = $request->start_date;
        $Coupons->end_date = $request->end_date;
        $Coupons->discount_type = $request->discount_type;
        $Coupons->discount = $request->discount;
        $Coupons->total_used = $request->total_used;
        $Coupons->status = $request->status;
        $Coupons->save();

        toastr()->success('Admin successfully added slider');
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
        $Coupons->name = $request->name;
        $Coupons->code = $request->code;
        $Coupons->quantity = $request->quantity;
        $Coupons->max_use = $request->max_use;
        $Coupons->start_date = $request->start_date;
        $Coupons->end_date = $request->end_date;
        $Coupons->discount_type = $request->discount_type;
        $Coupons->discount = $request->discount;
        $Coupons->total_used = $request->total_used;
        $Coupons->status = $request->status;


        $Coupons->update();
        toastr()->success('Admin updated slider successfully');
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
        $getCoupons = Coupons::getCouponsTrashed();
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $getCoupons = Coupons::where('name', 'like', '%' . $keyword . '%');
        }
        return view("admin.coupons.trash-list", compact('getCoupons'));
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
