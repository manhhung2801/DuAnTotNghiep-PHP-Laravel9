<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Post_categories;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostCategoriesController extends Controller
{



     public function index(Request $request)
    {
        $post_categories = Post_categories::latest();
        if(!empty($request->get('keyword'))) {
            $post_categories = Post_categories::where('name', 'like', '%'.$request->get('keyword').'%');
        }

        $post_categories = $post_categories->paginate(15);
        return view('admin.post-category.index',compact('post_categories'));
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
        $post_categories = Post_categories::all();
        return view('admin.post-category.create',compact('post_categories'));
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
            'name' => ['required', 'max:200'],
            'slug' => ['max:200'],
            'status' => ['required']
        ]);
        $post_categories = new Post_categories();
        $post_categories->name = $request->name;
        $post_categories->slug = !empty(Str::slug($request->slug, '-')) ? Str::slug($request->slug, '-') : Str::slug($request->name, '-');
        $post_categories->status = $request->status;
        $post_categories->save();

        toastr()->success('Thêm loại bài viết thành công!', 'Thành Công');

        return redirect()->route('admin.post-category.index');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post_categories = Post_categories::findOrFail($id);
        return view('admin.post-category.edit', compact('post_categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'max:200',],
            'slug' => ['max:200'],
            'status' => ['required']
        ]);

        $post_categories = Post_categories::findOrFail($id);
        $post_categories->name = $request->name;
        $post_categories->slug = !empty(Str::slug($request->slug, '-')) ? Str::slug($request->slug, '-') : Str::slug($request->name, '-');
        $post_categories->status = $request->status;
        $post_categories->save();

        toastr('Cập nhật thành công!', 'success');

        return redirect()->route('admin.post-category.index');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_categories = Post_categories::findOrFail($id);
        $post_categories->delete();
       return response(['status' => 'success', 'message' => 'Đã xoá thành công!']);
    }


    public function changeStatus(Request $request){

        $post_categories = Post_categories::findOrFail($request->id);
        $post_categories->status = $request->status == 'true' ? 1 : 0;
        $post_categories->save();
        return response(['message' =>'Trạng thái đã được cập nhật']);
    }
    public function trashedPostcate(Request $request)
    {
          $post_categories = Post_categories::onlyTrashed()->latest();

        // Nếu có keyword trong request, thêm điều kiện tìm kiếm
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $post_categories = $post_categories->where('name', 'like', '%' . $keyword . '%');
        }

        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        $post_categories = $post_categories->get();

        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        return view('admin.post-category.trashlist',compact('post_categories'));
    }

    public function restore($id)
    {
         $post_categories = Post_categories::withTrashed()->findOrFail($id);
         if(!empty($post_categories))
         {
            $post_categories->restore();
         }
         return redirect()->route('admin.post-category.index')->with('success','Danh mục bài đăng được khôi phục thành công');
    }

    public function deleteVariant($id)
    {
         $post_categories = Post_categories::withTrashed()->findOrFail($id);
         if(!empty($post_categories))
         {
            $post_categories->forceDelete();
         }
         return redirect()->route('admin.post-category.index')->with('success','Danh mục bài viết đã được xóa thành công');
    }

}
