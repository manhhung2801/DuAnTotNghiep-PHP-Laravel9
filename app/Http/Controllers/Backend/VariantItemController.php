<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VariantItem;
use App\Models\Variant;
use App\Models\Products;
use Illuminate\Database\Eloquent\SoftDeletes;

class VariantItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variantItem = VariantItem::get();
        return view('admin.variantItem.index',compact('variantItem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $variant = Variant::all();
        return view('admin.variantItem.create', compact('variant'));
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
        $request->validate([
            'product_variant_id' => ['required'],
            'name' => ['required', 'max:200', 'unique:sub_categories,name'],
            'price' => ['required', 'numeric', 'min:0'],
            'is_default' => ['required'],
            'status' => ['required']
        ]);

        $variantItem = new variantItem();
        $variantItem->product_variant_id = $request->product_variant_id;
        $variantItem->name = $request->name;
        $variantItem->price = $request->price;
        $variantItem->is_default = $request->is_default;
        $variantItem->status = $request->status;
        $variantItem->save();

        toastr('Created Successfully!', 'success');

        return redirect()->route('admin.variantItem.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $variant = Variant::all();
        $variantItem = variantItem::findOrFail($id);
        return view('admin.variantItem.edit', compact('variantItem', 'variant'));
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
        //
        $request->validate([
            'product_variant_id' => ['required'],
            'name' => ['required', 'max:200', 'unique:sub_categories,name'],
            'price' => ['required', 'numeric', 'min:0'],
            'is_default' => ['required'],
            'status' => ['required']
        ]);

        $variantItem = VariantItem::findOrFail($id);
        $variantItem->product_variant_id = $request->product_variant_id;
        $variantItem->name = $request->name;
        $variantItem->price = $request->price;
        $variantItem->is_default = $request->is_default;
        $variantItem->status = $request->status;
        $variantItem->save();

        toastr('Updated Successfully!', 'success');

        return redirect()->route('admin.variantItem.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $variantItem=VariantItem::findOrFail($id);
        // $variantItem->delete();
        $data = VariantItem::find($id)->delete();
       return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }


    public function changeStatus(Request $request, $id = null){
        $variantItem = VariantItem::findOrFail($request->id);
        $variantItem->status = $request->status == 'true' ? 1 : 0;
        $variantItem->save();
        return response(['message' =>'Status has been updated']);
    }


    public function onlyTrashed()
    {
        // $variantItem = VariantItem::get()->toArray();
        // $variantItem = VariantItem::paginate(15);
        $model = new VariantItem();
        $variantItem = $model::onlyTrashed()->get();
        // dd($variantItem);
        return view('admin.variantItem.index',compact('variantItem'));
    }
    public function restore($id = null)
    {
        $variantItem = VariantItem::withTrashed()->find($id)->restore();
        // dd($variantItem);
        return redirect()->route('admin.variantItem.onlyTrashed');
    }
    public function destroyTrashed($id = null)
    {
        $variantItem = VariantItem::withTrashed()->find($id);
        $variantItem->forceDelete();
        return response(['status' => 'success', 'Successfully!']); 
    }
}
