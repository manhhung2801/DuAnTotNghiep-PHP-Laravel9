<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageCategory;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showPages($slug1 = null, $slug2 = null)
    {
        try {

            $ListPageCategories = PageCategory::all();
            $listPages = Page::all();

            // Check điều kiện $slug1 and $slug2 
            if ($slug1 && $slug2) {
                // Check nếu không có $slug1 thì thoát ra trang 404
                $checkedPageCategories = PageCategory::where("slug", $slug1)->first();
                if (!$checkedPageCategories) {
                    return view(404);
                }

                // Tìm trang có $slug2 bên dưới thông tin tìm thấy
                $PagesDetail = Page::where("slug", $slug2)
                    ->where("page_category_id", $checkedPageCategories->id)
                    ->first();

                if (!$PagesDetail) {
                    return view(404);
                }

                return view("frontend.pages.index", [
                    'ListPageCategories' => $ListPageCategories,
                    'listPages' => $listPages,
                    'PagesDetail' => $PagesDetail,
                    'checkedPageCategories' => $checkedPageCategories->id,
                ]);
            } else {
                return view(404);
            }
        } catch (\Exception $e) {
            return view(404);
        }
    }
}
