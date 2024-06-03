<?php

namespace App\Http\Controllers\Backend;

use Str;
use Exception;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::latest();
        if(!empty($request->get('keyword'))) {
            $categories = $categories->where('name', 'like', '%'.$request->get('keyword').'%');
        }
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
            'icon' => ['required'],
            'status' => ['required'],
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->icon = $request->icon;
        $category->status = $request->status;
        $category->save();
        // Set a success toast, with a title
        toastr()->success('Add New Category Successfully!', 'Success');

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
            'icon' => ['required'],
            'status' => ['required'],
        ]);

        $category =  Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->icon = $request->icon;
        $category->status = $request->status;
        $category->save();

        // Set a success toast, with a title
        toastr()->success('Updated Category Successfully!', 'Success');

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
            return response(['status' => 'error', 'message' => 'This items contain, sub items for delete this you have to delete the sub items first!']);
        }
        $category->delete();

        return response(['status' => 'success', 'Deleted Successfully!']);
    }

    public function changeStatus(Request $request)
    {

        $category = Category::findOrFail($request->id);
        $category->status = $request->status == 'true' ? 1 : 0;
        $category->save();
        return response(['message' => 'Status has been updated']);
    }

    // show trash list and search
    public function showTrash(Request $request)
    {
        // Lấy tất cả các category đã bị xóa, sắp xếp theo thứ tự mới nhất
        $getCategories = Category::onlyTrashed()->latest();

        // Nếu có keyword trong request, thêm điều kiện tìm kiếm
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $getCategories = $getCategories->where('name', 'like', '%' . $keyword . '%');
        }

        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        $getCategories = $getCategories->get();

        // Trả về view với dữ liệu các category đã bị xóa
        return view('admin.category.trash-list', compact('getCategories'));
    }

    // delete in trash
    public function destroyTrash($id) {
        try{
            Category::destroyTrashed($id);
            return response(['status' => 'success', 'Deleted Forever Successfully!']);
        }
        catch(Exception $e) {
            return response(['status' => 'error', 'Deleted Faild! '.$e.'' ]);
        }
    }

    public function restoreTrash($id) {
        try{
            Category::restoreTrashed($id);
            return response(['status' => 'success', 'Successfully!']);
        }
        catch(Exception $e) {
            return response(['status' => 'error', 'message' => 'Restore Faild '.$e.'']);
        }
    }
}
