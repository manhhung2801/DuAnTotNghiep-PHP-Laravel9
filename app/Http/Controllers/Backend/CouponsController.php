<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupons;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $coupons = Coupons::paginate(15);
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
            'code' => ['required',],
            'quantity' => ['required',],
            'max_use' => ['required',],
            'start_date' => ['required',],
            'end_date' => ['required',],
            'discount_type' => ['required'],
            'discount' => ['required'],
            'total_used' => ['required'],
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
        $Coupons = Coupons::findOrFail($id);
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
        $Coupons = Coupons::find($id);
        $Coupons->delete();
        return response(['status' => 'success', 'Deleted Successfully!']);

    }

    public function changeStatus(Request $request)
    {

        $Coupons = Coupons::findOrFail($request->id);
        $Coupons->status = $request->status == 'true' ? 1 : 0;
        $Coupons->save();
        return response(['message' => 'Status has been updated']);
    }
}
