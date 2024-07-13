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
        foreach ($newsCate as $cate) {
            $posts = Post::where('status', 1)->where('category_id', $cate->id)->take(4)->get();
            $newsDetail[$cate->id] = $posts;
        }


        return view('frontend.post.home-post', [
            'newsCate' => $newsCate,
            'newsDetail' => $newsDetail,
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
        // $newsCateDetail = Post_categories::where("slug",$slugs_cate);
        $newsdetai = Post::where("slug", $lugs)->first();
        $list_related_news = Post::take(4)->get();


        return view('frontend.post.post', [
            'newsdetai' => $newsdetai,
            'newsCate' => $newsCate,
            'list_related_news' => $list_related_news,
            // 'newsCateDetail' => $newsCateDetail,

        ]);
    }
}
