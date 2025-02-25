<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Post_categories;
use App\Models\Slider;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {


        $newsCate = Post_categories::all();

        $newsDetail = [];
        $slideposts = Post::where('status', 1)->orderBy('id', 'ASC')->take(4)->get();
        foreach ($newsCate as $cate) {
            $posts = Post::where('status', 1)->where('category_id', $cate->id)->take(4)->get();
            $newsDetail[$cate->id] = $posts;
        }


        return view('frontend.post.home-post', [
            'newsCate' => $newsCate,
            'newsDetail' => $newsDetail,
            'slideposts' => $slideposts,
        ]);
    }

    function newsSiteType($slugs)
    {
        $newsCate = Post_categories::all();
        $newCatePost = Post_categories::where('slug', $slugs)->get();
        $newCatefind = Post_categories::where('slug', $slugs)->first();
        if ($newCatePost) {
            $newsDetail = Post::where('category_id', $newCatePost[0]['id'])->paginate(8);
            return view('frontend.post.index', [
                'newsCate' => $newsCate,
                'newsDetail' => $newsDetail,
                'newCatefind' => $newCatefind,
            ]);
        }
    }



    public function details($slugs_cate, $lugs)
    {
        $newsCate = Post_categories::all();
        $newsdetai = Post::where("slug", $lugs)->first();
        // lấy id bài viết của bài viết liên quan trừ id bào viết ban đầu
        $list_related_id = Post::where('category_id', $newsdetai->category_id)->where('id', '!=', $newsdetai->id)->pluck('id');
        // lấy bài viết liên quan theo id đã lấy
        $list_related_news = Post::whereIn('id', $list_related_id)->take(4)->get();


        if (auth()->check()) {
            $this->PostView($newsdetai->id);
        }

        if ($newsdetai) {
            return view('frontend.post.post', [
                'newsdetai' => $newsdetai,
                'newsCate' => $newsCate,
                'list_related_news' => $list_related_news,
            ]);
        } else {
            return view(404);
        }
    }
    public function PostView($postId)
    {
        $viewedPosts = session()->get('viewed_posts', []);

        if (!in_array($postId, $viewedPosts)) {
            Post::where('id', $postId)->increment('post_views');

            $viewedPosts[] = $postId;
            session()->put('viewed_posts', $viewedPosts);
        }
    }
}
