<?php

namespace App\Http\Controllers\Backend;

use Log;
use Str;
use Exception;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::query(); // Start with a clean query builder

        if(!empty($request->get('keyword'))) {

            $categories = $categories->where('name', 'like', '%'.$request->get('keyword').'%');
        }

       // Order by rank in ascending order
        $categories = $categories->orderBy('rank', 'asc');

        // Paginate with 10 items per page
        $categories = $categories->paginate(10);

        return view("admin.category.index", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.category.create");
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
            'name' => ['required', 'string', 'max:200'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048'],
            'rank' => ['numeric'],
            'status' => ['required'],
        ], [
            'name.required' => 'Tên không được để trống.',
            'image.required' => 'Hình ảnh không được để trống.',
            'image.image' => 'Định dạng không hợp lệ. Yêu cầu Hình ảnh.',
            'image.mimes' => 'Hình ảnh phải là một trong các định dạng sau: jpeg, png, jpg, gif, svg, webp.',
            'image.max' => 'Hình ảnh không thể vượt quá 2048 kilobytes.',
            'rank.numeric' => 'Thứ hạng phải là một số.',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        $category->rank = $request->rank;
        $category->status = $request->status;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('uploads/category'), $imageName);
            $category->image = $imageName;
        }
        $category->save();
        // Set a success toast, with a title
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
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
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
            'name' => ['required', 'string', 'max:200'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048'],
            'rank' => ['numeric'],
            'status' => ['required'],
        ], [
            'name.required' => 'Tên không được để trống.',
            'image.image' => 'Định dạng không hợp lệ. Yêu cầu Hình ảnh.',
            'image.mimes' => 'Hình ảnh phải là một trong các định dạng sau: jpeg, png, jpg, gif, svg, webp.',
            'image.max' => 'Hình ảnh không thể vượt quá 2048 kilobytes.',
            'rank.numeric' => 'Thứ hạng phải là một số.',
        ]);

        $category =  Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->rank = $request->rank;
        $category->status = $request->status;

        if($request->hasFile('image')) {
            if (File::exists(public_path("uploads/{$category->image}"))) {
                File::delete(public_path("uploads/{$category->image}"));
            }
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('uploads/category'), $imageName);
            $category->image = $imageName;
        }

        $category->save();

        // Set a success toast, with a title
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
        $category = Category::findOrFail($id);


        $subCategory = SubCategory::where('category_id', $category->id)->count();
        if ($subCategory > 0) {
            return response(['status' => 'error', 'message' => 'Mục này chứa, các Sub Category để xóa mục này bạn phải xóa các mục phụ trước!']);
        }

        $category->delete();

        return response(['status' => 'success', 'Đã xóa thành công!']);
    }

    public function changeStatus(Request $request)
    {

        $category = Category::findOrFail($request->id);
        $category->status = $request->status == 'true' ? 1 : 0;
        $category->save();
        return response(['message' => 'Thay đổi trạng thái thành công!']);
    }

    // show trash list and search
    public function showTrash(Request $request)
    {
        $getCategories = Category::onlyTrashed()->latest();

        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $getCategories = $getCategories->where('name', 'like', '%' . $keyword . '%');
        }

        $getCategories = $getCategories->get();

        return view('admin.category.trash-list', compact('getCategories'));
    }

    // delete in trash
    public function destroyTrash($id) {
        try{
            $category = Category::withTrashed()->findOrFail($id);

            if (File::exists(public_path("uploads/category/{$category->image}"))) {
                File::delete(public_path("uploads/category/{$category->image}"));
            }

            Category::destroyTrashed($id);

            return response(['status' => 'success', 'Đã xóa vĩnh viễn thành công!']);
        }
        catch(Exception $e) {
            return response(['status' => 'error', 'Xoá thất bại! '.$e.'' ]);
        }
    }

    public function restoreTrash($id) {
        try{
            Category::restoreTrashed($id);
            return response(['status' => 'success', 'Khôi phục thành công!']);
        }
        catch(Exception $e) {
            return response(['status' => 'error', 'message' => 'Khôi phục không thành công '.$e.'']);
        }
    }
}
