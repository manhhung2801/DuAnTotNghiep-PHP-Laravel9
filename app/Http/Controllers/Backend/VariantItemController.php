<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VariantItem;
use App\Models\Variant;
use App\Models\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

class VariantItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getVariantItemByVariantId($variant_id, Request $request)
    {
        $variant = Variant::where('id', $variant_id)->first();;

        $product = Product::where('id', $variant->product_id)->first();

        $filteredVariantItem = VariantItem::where('product_variant_id', $variant->id)->latest();

        if (!empty($request->get('keyword'))) {
            $filteredVariantItem = $filteredVariantItem->where('name', 'like', '%' . $request->get('keyword') . '%');
        }

        $variantItem = $filteredVariantItem->where('product_variant_id', $variant->id)->paginate(15);

        return view('admin.variantItem.index', compact('variantItem', 'product', 'variant'));
    }

    public function index(Request $request)
    {
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
            'product_variant_id' => ['required', 'numeric', 'min:0'],
            'name' => ['required', 'max:200', 'unique:sub_categories,name'],
            'status' => ['required']
        ]);

        $variantItem = new variantItem();
        $variantItem->product_variant_id = $request->product_variant_id;
        $variantItem->name = $request->name;
        $variantItem->status = $request->status;
        $variantItem->save();

        toastr('Thêm thành công!', 'success');

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
        $variantItem = variantItem::findOrFail($id);
        $variant = Variant::findOrFail($variantItem->product_variant_id);
        $product = Product::findOrFail($variant->product_id);
        return view('admin.variantItem.edit', compact('variantItem', 'variant', 'product'));
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
            'name' => ['required', 'max:200', 'unique:sub_categories,name'],
            'status' => ['required']
        ]);

        $variantItem = VariantItem::findOrFail($id);
        $variantItem->name = $request->name;
        $variantItem->status = $request->status;
        $variantItem->save();

        toastr('Cập nhật thành công!', 'success');

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
        $data = VariantItem::find($id)->delete();
        return response(['status' => 'success', 'Cập nhật thành công!']);
    }


    public function changeStatus(Request $request, $id = null)
    {
        $variantItem = VariantItem::findOrFail($request->id);
        $variantItem->status = $request->status == 'true' ? 1 : 0;
        $variantItem->save();
        return response(['message' => 'Cập nhật thành công']);
    }


    public function onlyTrashed(Request $request)
    {


        $variantItem = VariantItem::onlyTrashed()->latest();

        // Nếu có keyword trong request, thêm điều kiện tìm kiếm
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $variantItem = $variantItem->where('name', 'like', '%' . $keyword . '%');
        }

        $model = new VariantItem();
        $variantItem = $model::onlyTrashed()->get();
        return view('admin.variantItem.index', compact('variantItem'));
    }
    public function restore($id = null)
    {
        $variantItem = VariantItem::withTrashed()->find($id)->restore();
        return response(['status' => 'succses', 'message' => 'Xoá thành công']);
    }
    public function destroyTrashed($id = null)
    {
        $variantItem = VariantItem::withTrashed()->find($id);
        $variantItem->forceDelete();
        return response(['status' => 'success', 'Cập nhật thành công!']);
    }
}
