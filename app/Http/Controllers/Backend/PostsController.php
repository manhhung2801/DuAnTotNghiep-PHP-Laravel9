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
        return view('admin.post.trashlist', compact('post'));
    }

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('role','admin')->get();
        $post_categories = Post_categories::all();
        return view('admin.post.create', compact('post_categories', 'user'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      try{
        $request->validate(
            [
                'category_id' => 'required',
                'user_id' => 'required',
                'title' => 'required|max:255',
                'description' => 'required',
                'content' => 'required',
                'image' => 'image|mimes:jpeg,jpg,png,gif,webp|max:10240',
                'seo_description' => 'required',
                'seo_title' => 'required',
            ],[
                'category_id.required' => "Danh mục bài đăng không được để trống. ",
                'user_id.required' => "Tên người đăng bài không được để trống. ",
                'title.required' => "Tiêu đề không được để trống. ",
                'content.required' => "Nội dung không được để trống. ",
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
        $post->image = $this->uploadFile($request, 'image', '/post');
        $post->title = $request->title;
        $post->content = $request->content;
        $post->slug = !empty(Str::slug($request->slug, '-')) ? Str::slug($request->slug, '-') : Str::slug($request->title, '-');

        $post->description = $request->description;
        $post->seo_title = $request->seo_title;
        $post->seo_description = $request->seo_description;
        $post->type = $request->type;
        $post->status = $request->status;
        $post->save();
     
        if ($request->hasFile('image_gallery')) {
                foreach ($request->file('image_gallery') as $gallery) {
                    $file_name = 'media_gallery_' . uniqid() . '.' . $gallery->extension(); //uniqid() giúp tạo ra một ID duy nhất
                    $gallery->move(public_path('/uploads/post_gallery'), $file_name);

                    //Update vào table gallery
                    $image_gallery = new Post_image_galleries();
                    $image_gallery->image = $file_name;
                    $image_gallery->post_id = $post->id; //product_id lấy từ Product vừa thêm ở trên
                    $image_gallery->save();
                }
            }
            toastr()->success("Thêm " . $request->name . " Thành công");
            return redirect()->back();
        } catch (ValidationException $e) {
            toastr()->error('Lỗi: ' . $e);
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $gallery = Post_image_galleries::where('post_id', $id)->get('image');
        $post = Post::findOrFail($id);
        $user = User::where('role','admin')->get();
        $post_categories = Post_categories::all();
        return view('admin.post.edit', compact('post', 'user', 'post_categories'));
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
                'category_id' => 'required',
                'user_id' => 'required',
                'title' => 'required|max:255',
                'description' => 'required',
                'content' => 'required',
                'image' => 'image|mimes:jpeg,jpg,png,gif,webp|max:10240',
                'seo_description' => 'required',
                'seo_title' => 'required',
            ],[
                'category_id.required' => "Danh mục bài đăng không được để trống. ",
                'user_id.required' => "Tên người đăng bài không được để trống. ",
                'title.required' => "Tiêu đề không được để trống. ",
                'content.required' => "Nội dung không được để trống. ",
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
                $galleryDel = Post_image_galleries::where('post_id', $id)->delete();
                foreach ($request->image_gallery as $gal) {
                    $gallery = new Post_image_galleries();
                    $ext = $gal->extension();
                    $fileName = 'media_gallery_' . uniqid() . '.' . $ext;
                    $gal->move(public_path('uploads/gallery/'), $fileName);
                    $gallery->image = $fileName;
                    $gallery->post_id = $id;
                    $gallery->save();
                }
            }

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
