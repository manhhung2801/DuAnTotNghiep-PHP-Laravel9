<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Variant;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class VariantController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function trashedVariant(Request $request)
    {


        $variant = Variant::onlyTrashed()->latest();

        // Nếu có keyword trong request, thêm điều kiện tìm kiếm
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $variant = $variant->where('name', 'like', '%' . $keyword . '%');
        }

        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        $variant = $variant->get();

        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        return view('admin.variant.trashlist', compact('variant'));
    }

    public function restore($id)
    {
        $variant = Variant::withTrashed()->findOrFail($id);
        if (!empty($variant)) {
            $variant->restore();
        }
        return response(['status' => 'success', 'message' => 'Successfully!']);
    }

    public function deleteVariant($id)
    {
        $variant = Variant::withTrashed()->findOrFail($id);
        if (!empty($variant)) {
            $variant->forceDelete();
        }
        return response(['status' => 'success', 'message' => 'Variant deleted successfully!']);
    }

    public function getVariantByProductId($id, Request $request)
    {
        $product = Product::findOrFail($id);

        $filteredVariant = Variant::where('product_id', $id)->latest();
        if (!empty($request->get('keyword'))) {
            $filteredVariant = $filteredVariant->where('name', 'like', '%' . $request->get('keyword') . '%');
        }

        $variant = $filteredVariant->where('product_id', $id)->paginate(15);
        return view('admin.variant.index', compact('variant', 'product'));
    }

    public function index()
    {
    }




    public function show($id)
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        return view('admin.variant.create', compact('product'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => ['required', 'numeric'],
            'name' => ['required', 'max:200', 'unique:sub_categories,name'],
            'type' => ['required'],
            'status' => ['required']
        ]);

        $variant = new variant();
        $variant->product_id = $request->product_id;
        $variant->name = $request->name;
        $variant->type = $request->type;
        $variant->status = $request->status;
        $variant->save();

        toastr('Đã tạo thành công!', 'success');

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $variant = Variant::findOrFail($id);
        $product = Product::findOrFail($variant->product_id);
        return view('admin.variant.edit', compact('variant', 'product'));
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
        $request->validate([
            'name' => ['required', 'max:200', 'unique:sub_categories,name,' . $id],
            'type' => ['required'],
            'status' => ['required']
        ]);

        $variant = Variant::findOrFail($id);
        $variant->name = $request->name;
        $variant->type = $request->type;
        $variant->status = $request->status;
        $variant->save();

        toastr('Cập nhật thành công!', 'success');

        return redirect()->route('admin.product.variant', $variant->product_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $variant = Variant::findOrFail($id);
        $variant->delete();
        return response(['status' => 'success', 'message' => 'Đã xoá thành công!']);
    }


    public function changeStatus(Request $request)
    {

        $variant = Variant::findOrFail($request->id);
        $variant->status = $request->status == 'true' ? 1 : 0;
        $variant->save();
        return response(['message' => 'Trạng thái đã được cập nhật']);
    }
}
