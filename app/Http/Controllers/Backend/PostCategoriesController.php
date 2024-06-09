<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Post_categories;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostCategoriesController extends Controller
{
    

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
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
        return view('admin.post-cate.trashlist',compact('post_categories'));
    } 

    public function restore($id)
    {
         $post_categories = Post_categories::withTrashed()->findOrFail($id);
         if(!empty($post_categories))
         {
            $post_categories->restore();
         }
         return redirect()->route('admin.post-cate.index')->with('success','Post Category restored successfully');
    }

    public function deleteVariant($id)
    {
         $post_categories = Post_categories::withTrashed()->findOrFail($id);
         if(!empty($post_categories))
         {
            $post_categories->forceDelete();
         }
         return redirect()->route('admin.post-cate.index')->with('success','Post Category deleted successfully');
    }


     public function index(Request $request)
    {   
        $post_categories = Post_categories::latest();
        if(!empty($request->get('keyword'))) {
            $post_categories = Post_categories::where('name', 'like', '%'.$request->get('keyword').'%');
        }

        $post_categories = $post_categories->paginate(15);
        return view('admin.post-cate.index',compact('post_categories'));
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
        return view('admin.post-cate.create', compact('post_categories'));
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
            'status' => ['required']
        ]);

        $post_categories = new Post_categories();
        $post_categories->name = $request->name;
        $post_categories->slug = !empty(Str::slug($request->slug, '-')) ? Str::slug($request->slug, '-') : Str::slug($request->name, '-');
        $post_categories->status = $request->status;
        $post_categories->save();

        toastr('Created Successfully!', 'success');

        return redirect()->route('admin.post-cate.index');
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
        return view('admin.post-cate.edit', compact('post_categories'));
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
            'name' => ['required', 'max:200',],
            'status' => ['required']
        ]);

        $post_categories = Post_categories::findOrFail($id);
        $post_categories->name = $request->name;
        $post_categories->slug = !empty(Str::slug($request->slug, '-')) ? Str::slug($request->slug, '-') : Str::slug($request->name, '-');
        $post_categories->status = $request->status;
        $post_categories->save();

        toastr('Updated Successfully!', 'success');

        return redirect()->route('admin.post-cate.index');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_categories=Post_categories::findOrFail($id);
        $post_categories->delete();
       return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }


    public function changeStatus(Request $request){

        $post_categories = Post_categories::findOrFail($request->id);
        $post_categories->status = $request->status == 'true' ? 1 : 0;
        $post_categories->save();
        return response(['message' =>'Status has been updated']);
    }
    
}
