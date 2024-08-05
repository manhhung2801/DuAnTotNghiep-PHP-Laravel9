<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post_categories;
use App\Models\Post;
use App\Models\User;
use App\Models\Post_image_galleries;
use Illuminate\Validation\ValidationException;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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



    public function restore($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        if (!empty($post)) {
            $post->restore();
        }
        return redirect()->route('admin.post.index')->with('success', 'Đã khôi phục bài viết thành công');
    }

    public function deleteVariant($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        if (!empty($post)) {
            $post->forceDelete();
        }
        return redirect()->route('admin.post.index')->with('success', 'Đã xóa bài viết thành công');
    }


    public function index(Request $request)
    {
        $post = Post::latest();
        if (!empty($request->get('keyword'))) {
            $post = Post::where('title', 'like', '%' . $request->get('keyword') . '%');
        }

        $post = $post->paginate(15);
        return view('admin.post.index', compact('post'));
    }




    public function show($id)
    {
    }

   
    public function create()
    {
        $user = User::where('role','admin')->get();
        $post_categories = Post_categories::all();
        return view('admin.post.create', compact('post_categories', 'user'));
    }
  
    public function store(Request $request)
    {
        $request->validate(
            [
                'category_id' => ['required'],
                'user_id' => ['required'],
                'title' => ['required','max:255'],
                'description' => ['required'],
                'content' => ['required'],
                'image' => ['required','image','mimes:jpeg,jpg,png,gif,webp','max:10240'],
                'seo_description' => ['required'],
                'seo_title' => ['required'],
                'type' => ['required'],
            ],[
                'category_id.required' => "Danh mục bài đăng không được để trống. ",
                'user_id.required' => "Tên người đăng bài không được để trống. ",
                'title.required' => "Tiêu đề không được để trống. ",
                'content.required' => "Nội dung không được để trống. ",
                'type.required' => "Kiểu không được để trống. ",
                'seo_description.required' => "Mô tả SEO không được để trống. ",
                'seo_title.required' => "Tiêu đề SEO không được để trống. ",
                'description.required' => "Nội dung bài viết không được để trống. ",
                'image.required' => 'Hình ảnh không được để trống.',
                'image.image' => 'Định dạng không hợp lệ. Yêu cầu Hình ảnh.',
                'image.mimes' => 'Hình ảnh phải là một trong các định dạng sau: jpeg, png, jpg, gif, svg.',
                'image.max' => 'Hình ảnh không thể vượt quá 2048 kilobytes.',
            ]
        );

        $post = new Post();
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;
        $post->image = $this->uploadFile($request,'image','/post');
        $post->image_banner = $this->uploadFile($request,'image_banner','/image_banner');
        $post->title = $request->title;
        $post->content = $request->content;
        $post->slug = !empty(Str::slug($request->slug, '-')) ? Str::slug($request->slug, '-') : Str::slug($request->title, '-');

        $post->description = $request->description;
        $post->seo_title = $request->seo_title;
        $post->seo_description = $request->seo_description;
        $post->type = $request->type;
        $post->status = $request->status;
        $post->save();
        toastr()->success("Thêm " . $request->name . " Thành công");
        return redirect()->back(); 
    }

   
    public function edit($id)
    {   
        $gallery = Post_image_galleries::where('post_id', $id)->get('image');
        $post = Post::findOrFail($id);
        $user = User::where('role','admin')->get();
        $post_categories = Post_categories::all();
        return view('admin.post.edit', compact('post', 'user', 'post_categories','gallery'));
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

        $request->validate(
            [
                'category_id' => ['required'],
                'user_id' => ['required'],
                'title' => ['required','max:255'],
                'description' => ['required'],
                'content' => ['required'],
                'image' => ['image','mimes:jpeg,jpg,png,gif,webp','max:10240'],
                'seo_description' => ['required'],
                'seo_title' => ['required'],
                'type' => ['required'],
            ],[
                'category_id.required' => "Danh mục bài đăng không được để trống. ",
                'user_id.required' => "Tên người đăng bài không được để trống. ",
                'title.required' => "Tiêu đề không được để trống. ",
                'content.required' => "Nội dung không được để trống. ",
                'type.required' => "Kiểu không được để trống. ",
                'seo_description.required' => "Mô tả SEO không được để trống. ",
                'seo_title.required' => "Tiêu đề SEO không được để trống. ",
                'description.required' => "Nội dung bài viết không được để trống. ",
                'image.required' => 'Hình ảnh không được để trống.',
                'image.image' => 'Định dạng không hợp lệ. Yêu cầu Hình ảnh.',
                'image.mimes' => 'Hình ảnh phải là một trong các định dạng sau: jpeg, png, jpg, gif, svg.',
                'image.max' => 'Hình ảnh không thể vượt quá 2048 kilobytes.',
            ]
        );

        $post = Post::findOrFail($id);
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->slug = !empty(Str::slug($request->slug, '-')) ? Str::slug($request->slug, '-') : Str::slug($request->title, '-');

        $post->description = $request->description;
        $post->seo_title = $request->seo_title;
        $post->seo_description = $request->seo_description;
        $post->type = $request->type;
        $post->status = $request->status;

        if ($request->hasFile('image')) {
            $post->image = $this->uploadFile($request, 'image','/post');
            $post->image_banner = $this->uploadFile($request, 'image_banner','/image_banner');
            //Xóa file ảnh cũ
            if (File::exists(public_path('uploads/post/' . $request->image_old))) {
                File::delete(public_path('uploads/post/' . $request->image_old));
            }
            if (File::exists(public_path('uploads/image_banner/' . $request->image_old))) {
                File::delete(public_path('uploads/image_banner/' . $request->image_old));
            }
        } else {
            // Giữ nguyên ảnh cũ
            $post->image_banner =$request->image_old;
            $post->image = $request->image_old;
        }
        $post->save();
        toastr('Cập nhật thành công!', 'success');

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
        $post = Post::findOrFail($id);
        $post->delete();

        return response(['status' => 'success', 'message' => 'Đã xoá thành công!']);
    }


    public function changeStatus(Request $request)
    {

        $post = Post::findOrFail($request->id);
        $post->status = $request->status == 'true' ? 1 : 0;
        $post->save();
        return response(['message' => 'Trạng thái đã được cập nhật']);
    }
}
