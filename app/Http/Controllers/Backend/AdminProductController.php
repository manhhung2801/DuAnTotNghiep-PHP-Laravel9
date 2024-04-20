<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ruleProductCreate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\SubCategory;
use App\Models\product_image_galleries;
use Illuminate\Support\Facades\File;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function uploadFile(Request $request, String $inputName, String $path)
    {
        if ($request->hasFile($inputName)) {
            $file = $request->file($inputName);
            $ext = $file->extension();
            $fileName = 'media_' . uniqid() . '.' . $ext;
            $file->move(public_path('/uploads' . $path), $fileName);
            return $fileName;
        }
        return null;
    }

    public function index()
    {
        $getProduct = Products::getProduct();
        return view('admin.products.index', compact('getProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('status', 1)->get();
        return view('admin.products.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ruleProductCreate $request)
    {
        $product = new Products();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->offer_price = $request->offer_price;
        $product->offer_start_date = $request->offer_start_date;
        $product->offer_end_date = $request->offer_end_date;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->child_category_id = $request->child_category_id;
        $product->video_link = $request->video_link;
        $product->product_type = $request->product_type;
        $product->status = $request->status;
        $product->seo_title = $request->seo_title;
        $product->seo_description = $request->seo_description;
        $product->long_description = $request->long_description;
        $product->short_description = $request->short_description;
        // thêm slug nếu không tồn tại thì trích xuất từ name bằng method Str::slug
        $product->slug = !empty($request->slug) ? $request->slug : Str::slug($request->name, "-");
        $product->image = $this->uploadFile($request, 'image', '/products');
        $product->save();

        //Thêm image gallery
        if ($request->hasFile('image_gallery')) {
            foreach ($request->file('image_gallery') as $gallery) {
                $image_gallery = new product_image_galleries();
                $ext = $gallery->extension(); //lấy đuôi file
                $file_name = 'media_gallery_' . uniqid() . '.' . $ext; //uniqid() giúp tạo ra một ID duy nhất
                $gallery->move(public_path('/uploads/gallery'), $file_name);
                //Update vào table gallery
                $image_gallery->image = $file_name;
                $image_gallery->product_id = $product->id; //product_id lấy từ Product vừa thêm ở trên
                $image_gallery->save();
            }
        }
        toastr()->success("Add" . $request->name . "Success");
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
        $gallery = product_image_galleries::where('product_id', $id)->get('image');
        $category = Category::where('status', 1)->get();
        $product = Products::getProductItem($id);
        return view('admin.products.edit', compact('product', 'category', 'gallery'));
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
            'name' => 'required|max:255',
            'qty' => 'required|min:0',
            'image' => 'image|mimes:jpeg,jpg,png,gif,webp|max:10240',
            'image_gallery' => 'max:10240',
            'price' => 'required|integer',
            'offer_price' => 'integer',
            'sub_category_id' => 'required',
            'child_category_id' => 'required',
        ]);
        $product = Products::findOrFail($id);
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->offer_price = $request->offer_price;
        $product->offer_start_date = $request->offer_start_date;
        $product->offer_end_date = $request->offer_end_date;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->child_category_id = $request->child_category_id;
        $product->video_link = $request->video_link;
        $product->product_type = $request->product_type;
        $product->status = $request->status;
        $product->seo_title = $request->seo_title;
        $product->seo_description = $request->seo_description;
        $product->long_description = $request->long_description;
        $product->short_description = $request->short_description;
        // thêm slug nếu không tồn tại thì trích xuất từ name bằng method Str::slug
        $product->slug = !empty($request->slug) ? $request->slug : Str::slug($request->name, "-");

        // Nếu File image mới tồn tại tiến hành update và xóa ảnh cũ từ thư mục
        if ($request->hasFile('image')) {
            $product->image = $this->uploadFile($request, 'image', '/products');
            //Xóa file ảnh cũ
            if (File::exists(public_path('uploads/products/' . $request->image_old))) {
                File::delete(public_path('uploads/products/' . $request->image_old));
            }
        } else {
            // Giữ nguyên ảnh cũ
            $product->image = $request->image_old;
        }
        $product->save();

        // Nếu image_gallery tồn tại tiến hành update
        if ($request->hasFile('image_gallery')) {
            // Xóa file ảnh cũ trong uploads
            if (!empty($request->image_gallery_old)) {
                foreach (json_decode($request->image_gallery_old) as $gal) {
                    if (File::exists(public_path('uploads/gallery/' . $gal->image))) {
                        File::delete(public_path('uploads/gallery/' . $gal->image));
                    }
                }
            }
            // Lấy gallery của product theo ID và xóa tất cả
            $galleryDel = product_image_galleries::where('product_id', $id)->delete();
            foreach ($request->image_gallery as $gal) {
                $gallery = new product_image_galleries();
                $ext = $gal->extension();
                $fileName = 'media_gallery_' . uniqid() . '.' . $ext;
                $gal->move(public_path('uploads/gallery/'), $fileName);
                $gallery->image = $fileName;
                $gallery->product_id = $id;
                $gallery->save();
            }
        }

        toastr()->success('Update ' . $request->name . ' Success');
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
        $product = Products::findOrFail($id);
        $product->delete();
        return response(['status' => 'success', 'Deleted Successfully!']);
    }
    public function changeStatus(Request $request)
    {

        $product = Products::getProductItem($request->id);
        $product->status = $request->status == 'true' ? 1 : 0;
        $product->save();
        return response(['message' => 'Status has been updated']);
    }

    public function getChildCategories(Request $request)
    {
        $childCategory = ChildCategory::where('sub_category_id', $request->id)->where('status', 1)->get();
        return $childCategory;
    }
}
