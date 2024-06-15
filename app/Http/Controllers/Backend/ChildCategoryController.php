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

class ChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $childCategories = ChildCategory::latest();
        if(!empty($request->get('keyword'))) {
            $childCategories = $childCategories->where('name', 'like', '%'.$request->get('keyword').'%');
        }

        $childCategories = $childCategories->paginate(10);
        return view('admin.child-category.index', compact('childCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.child-category.create', compact('categories'));
    }

    /**
     * Get sub categories
     */
    public function getSubCategories(Request $request){
        $subCategories = SubCategory::where('category_id', $request->id)->where('status', 1)->get();
        return $subCategories;
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
            'sub_category' => ['required'],
            'name' => ['required', 'max:200', 'unique:child_categories,name'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'status' => ['required']
        ],[
            'category.required' => 'Danh mục không được để trống.',
            'sub_category.required' => 'Danh mục con không được để trống.',
            'image.required' => 'Image không được để trống.',
            'image.image' => 'Định dạng không hợp lệ. Yêu cầu hình ảnh.',
            'image.mimes' => 'Hình ảnh phải là một trong các định dạng sau: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Hình ảnh không thể vượt quá 2048 kilobytes.',
            'name.required' => 'Tên không được để trống.',
            'name.max' => 'Tên không thể vượt quá 200 ký tự.',
            'name.unique' => 'Tên phải là duy nhất trong danh mục con.',
            'status.required' => 'Trạng thái không được để trống.',
        ]);

        $childCategory = new ChildCategory();
        $childCategory->category_id = $request->category;
        $childCategory->sub_category_id = $request->sub_category;
        $childCategory->name = $request->name;
        $childCategory->status = $request->status;
        $childCategory->slug = Str::slug($request->name);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('uploads/childcategory'), $imageName);
            $childCategory->image = $imageName;
        }

        $childCategory->save();

        toastr('Thêm Child Category mới thành công!', 'success');

        return redirect()->route('admin.child-category.index');
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
        $childCategory = ChildCategory::findOrFail($id);
        $subCategories = SubCategory::where('category_id', $childCategory->category_id)->get();

        return view('admin.child-category.edit', compact('categories', 'childCategory', 'subCategories'));
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
            'sub_category' => ['required'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'name' => ['required','max:200','unique:child_categories,name,'.$id],
            'status' => ['required']
        ],[
            'category.required' => 'Danh mục không được để trống.',
            'sub_category.required' => 'Danh mục con không được để trống.',
            'image.image' => 'Định dạng không hợp lệ. Yêu cầu hình ảnh.',
            'image.mimes' => 'Hình ảnh phải là một trong các định dạng sau: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Hình ảnh không thể vượt quá 2048 kilobytes.',
            'name.required' => 'Tên không được để trống.',
            'name.max' => 'Tên không thể vượt quá 200 ký tự.',
            'name.unique' => 'Tên phải là duy nhất trong danh mục con.',
            'status.required' => 'Trạng thái không được để trống.',
        ]);

        $childCategory = ChildCategory::findOrFail($id);
        $childCategory->category_id = $request->category;
        $childCategory->sub_category_id = $request->sub_category;
        $childCategory->name = $request->name;
        $childCategory->status = $request->status;
        $childCategory->slug = Str::slug($request->name);

        if($request->hasFile('image')) {
            if (File::exists(public_path("uploads/childcategory/{$childCategory->image}"))) {
                File::delete(public_path("uploads/childcategory/{$childCategory->image}"));
            }
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('uploads/childcategory'), $imageName);
            $childCategory->image = $imageName;
        }

        $childCategory->save();

        toastr('Cập nhật Child Category thành công!', 'success');
        return redirect()->route('admin.child-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $childCategory = ChildCategory::findOrFail($id);
        $childCategory->delete();

        return response(['status' => 'success', 'message' => 'Đã xóa Child Category thành công!!']);
    }

    public function changeStatus(Request $request){

        $childCategory = ChildCategory::findOrFail($request->id);
        $childCategory->status = $request->status == 'true' ? 1 : 0;
        $childCategory->save();
        return response(['message' => 'Thay đổi status thái thành công!']);
    }

    // show trash list and search
    public function showTrash(Request $request)
    {

        $getChildCategories = ChildCategory::onlyTrashed()->latest();

        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $getChildCategories = $getChildCategories->where('name', 'like', '%' . $keyword . '%');
        }

        $getChildCategories = $getChildCategories->get();

        return view('admin.child-category.trash-list', compact('getChildCategories'));
    }

    // delete in trash
    public function destroyTrash($id) {
        try{
            $childCategory = ChildCategory::withTrashed()->findOrFail($id);

            if (File::exists(public_path("uploads/childcategory/{$childCategory->image}"))) {
                File::delete(public_path("uploads/childcategory/{$childCategory->image}"));
            }


            ChildCategory::destroyTrashed($id);
            return response(['status' => 'success', 'Đã xóa vĩnh viễn thành công!']);
        }
        catch(Exception $e) {
            return response(['status' => 'error', 'Deleted Faild! '.$e.'' ]);
        }
    }

    public function restoreTrash($id) {
        try{
            ChildCategory::restoreTrashed($id);
            return response(['status' => 'success', 'Khôi phục thành công!']);
        }
        catch(Exception $e) {
            return response(['status' => 'error', 'message' => 'Khôi phục không thành công '.$e.'']);
        }
    }
}
