<?php

namespace App\Http\Controllers\Backend;

use Exception;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ChildCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $subCategories = SubCategory::latest();
        if(!empty($request->get('keyword'))) {
            $subCategories = $subCategories->where('name', 'like', '%'.$request->get('keyword').'%');
        }

        $subCategories = $subCategories->paginate(10);
        return view('admin.sub-category.index', compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.sub-category.create', compact('categories'));
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
            'category' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'name' => ['required', 'max:200', 'unique:sub_categories,name'],
            'status' => ['required']
        ],[
            'category.required' => 'Danh mục không được để trống.',
            'image.required' => 'Hình ảnh không được để trống.',
            'image.image' => 'Định dạng không hợp lệ. Yêu cầu hình ảnh.',
            'image.mimes' => 'Hình ảnh phải là một trong các định dạng sau: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Hình ảnh không thể vượt quá 2048 kilobytes.',
            'name.required' => 'Tên không được để trống.',
            'name.max' => 'Tên không thể vượt quá 200 ký tự.',
            'name.unique' => 'Tên phải là duy nhất trong danh mục con.',
            'status.required' => 'Trạng thái không được để trống.',
        ]);

        $subcategory = new SubCategory();
        $subcategory->category_id = $request->category;
        $subcategory->name = $request->name;
        $subcategory->status = $request->status;
        $subcategory->slug = Str::slug($request->name);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('uploads/subcategory'), $imageName);
            $subcategory->image = $imageName;
        }

        $subcategory->save();

        toastr('Tạo SubCategory thành công!', 'success');

        return redirect()->route('admin.sub-category.index');
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
        $categories = Category::all();
        $subCategory = SubCategory::findOrFail($id);
        return view('admin.sub-category.edit', compact('subCategory', 'categories'));
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
            'category' => ['required'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'name' => ['required', 'max:200', 'unique:sub_categories,name,'.$id],
            'status' => ['required']
        ],[
            'category.required' => 'Danh mục không được để trống.',
            'image.image' => 'Định dạng không hợp lệ. Yêu cầu hình ảnh.',
            'image.mimes' => 'Hình ảnh phải là một trong các định dạng sau: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Hình ảnh không thể vượt quá 2048 kilobytes.',
            'name.required' => 'Tên không được để trống.',
            'name.max' => 'Tên không thể vượt quá 200 ký tự.',
            'name.unique' => 'Tên phải là duy nhất trong danh mục con.',
            'status.required' => 'Trạng thái không được để trống.',
        ]);

        $subcategory = SubCategory::findOrFail($id);
        $subcategory->category_id = $request->category;
        $subcategory->name = $request->name;
        $subcategory->status = $request->status;
        $subcategory->slug = Str::slug($request->name);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('uploads/subcategory'), $imageName);
            $subcategory->image = $imageName;
        }

        $subcategory->save();

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
        $subCategory = SubCategory::findOrFail($id);
        $childCategory = ChildCategory::where('sub_category_id', $subCategory->id)->count();

        if($childCategory > 0){
            return response(['status' => 'error', 'message' => 'Mục này chứa, các Danh Mục Con để xóa mục này bạn phải xóa các mục phụ trước!']);
        }
        $subCategory->delete();

    return response(['status' => 'success', 'message' => 'Xoá thành công!']);
    }

    public function changeStatus(Request $request){

        $category = SubCategory::findOrFail($request->id);
        $category->status = $request->status == 'true' ? 1 : 0;
        $category->save();
        return response(['message' => 'Thay đổi trạng thái thành công!']);
    }

    // show trash list and search
    public function showTrash(Request $request)
    {
        // Lấy tất cả các category đã bị xóa, sắp xếp theo thứ tự mới nhất
        $getSubCategories = SubCategory::onlyTrashed()->latest();

        // Nếu có keyword trong request, thêm điều kiện tìm kiếm
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $getSubCategories = $getSubCategories->where('name', 'like', '%' . $keyword . '%');
        }

        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        $getSubCategories = $getSubCategories->get();

        // Trả về view với dữ liệu các category đã bị xóa
        return view('admin.sub-category.trash-list', compact('getSubCategories'));
    }

    // delete in trash
    public function destroyTrash($id) {
        try{
            $subCategory = SubCategory::withTrashed()->findOrFail($id);

            if (File::exists(public_path("uploads/subcategory/{$subCategory->image}"))) {
                File::delete(public_path("uploads/subcategory/{$subCategory->image}"));
            }

            SubCategory::destroyTrashed($id);
            return response(['status' => 'success', 'Xóa vĩnh viễn thành công!']);
        }
        catch(Exception $e) {
            return response(['status' => 'error', 'Xoá thất bại! '.$e.'' ]);
        }
    }

    public function restoreTrash($id) {
        try{
            SubCategory::restoreTrashed($id);
            return response(['status' => 'success', 'Khôi phục thành công!']);
        }
        catch(Exception $e) {
            return response(['status' => 'error', 'message' => 'Khôi phục không thành công '.$e.'']);
        }
    }
}
