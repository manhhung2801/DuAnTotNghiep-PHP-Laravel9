<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Variant;
use App\Models\Products;
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

     public function index()
    {
        $variant = Variant::paginate(15);
        return view('admin.variant.index',compact('variant'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Products::all();
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
            'product_id' => ['required'],
            'name' => ['required', 'max:200', 'unique:sub_categories,name'],
            'status' => ['required']
        ]);

        $variant = new variant();
        $variant->product_id = $request->product_id;
        $variant->name = $request->name;
        $variant->status = $request->status;
        $variant->save();

        toastr('Created Successfully!', 'success');

        return redirect()->route('admin.variant.index');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::all();
        $variant = Variant::findOrFail($id);
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
            'product_id' => ['required'],
            'name' => ['required', 'max:200', 'unique:sub_categories,name,'.$id],
            'status' => ['required']
        ]);

        $variant = Variant::findOrFail($id);
        $variant->product_id = $request->product_id;
        $variant->name = $request->name;
        $variant->status = $request->status;
        $variant->save();

        toastr('Updated Successfully!', 'success');

        return redirect()->route('admin.variant.index');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $variant=Variant::findOrFail($id);
        $variant->delete();
       return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }


    public function changeStatus(Request $request){

        $variant = Variant::findOrFail($request->id);
        $variant->status = $request->status == 'true' ? 1 : 0;
        $variant->save();
        return response(['message' =>'Status has been updated']);
    }
}
