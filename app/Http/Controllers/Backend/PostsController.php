<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Post_categories;
use App\Models\Post;
use App\Models\User;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostsController extends Controller
{
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function trashedPost(Request $request)
    {


          $post = Post::onlyTrashed()->latest();

        // Nếu có keyword trong request, thêm điều kiện tìm kiếm
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $post = $post->where('title', 'like', '%' . $keyword . '%');
        }

        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        $post = $post->get();

        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        return view('admin.post.trashlist',compact('post'));
    }

    public function restore($id)
    {
         $post = Post::withTrashed()->findOrFail($id);
         if(!empty($post))
         {
            $post->restore();
         }
         return redirect()->route('admin.post.index')->with('success','Post restored successfully');
    }

    public function deleteVariant($id)
    {
         $post = Post::withTrashed()->findOrFail($id);
         if(!empty($post))
         {
            $post->forceDelete();
         }
         return redirect()->route('admin.post.index')->with('success','Post deleted successfully');
    }


     public function index(Request $request)
    {
        $post = Post::latest();
        if(!empty($request->get('keyword'))) {
            $post = Post::where('title', 'like', '%'.$request->get('keyword').'%');
        }

        $post = $post->paginate(15);
        return view('admin.post.index',compact('post'));
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
        $user = User::all();
        $post_categories= Post_categories::all();
        return view('admin.post.create', compact('post_categories','user'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post = new Post();
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;
        $post->image = $this->uploadFile($request, 'image','/post');
        $post->title = $request->title;
        $post->slug = !empty(Str::slug($request->slug, '-')) ? Str::slug($request->slug, '-') : Str::slug($request->title, '-');
        $post->description = $request->description;
        $post->seo_title = $request->seo_title;
        $post->seo_description = $request->seo_description;
        $post->status = $request->status;
        $post->save();

        toastr('Created Successfully!', 'success');

        return redirect()->route('admin.post.index');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $user = User::all();
        $post_categories= Post_categories::all();
        return view('admin.post.edit', compact('post','user','post_categories'));
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


        $post = Post::findOrFail($id);
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->slug = !empty(Str::slug($request->slug, '-')) ? Str::slug($request->slug, '-') : Str::slug($request->title, '-');
        $post->description = $request->description;
        $post->seo_title = $request->seo_title;
        $post->seo_description = $request->seo_description;
        $post->status = $request->status;

        if ($request->hasFile('image')) {
                $post->image = $this->uploadFile($request, 'image', '/post');
                //Xóa file ảnh cũ
                if (File::exists(public_path('uploads/post/' . $request->image_old))) {
                    File::delete(public_path('uploads/post/' . $request->image_old));
                }
            } else {
                // Giữ nguyên ảnh cũ
                $post->image = $request->image_old;
            }
        $post->save();


        toastr('Updated Successfully!', 'success');

        return redirect()->route('admin.post.index');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        $post->delete();

       return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }


    public function changeStatus(Request $request){

        $post= Post::findOrFail($request->id);
        $post->status = $request->status == 'true' ? 1 : 0;
        $post->save();
        return response(['message' =>'Status has been updated']);
    }

}
