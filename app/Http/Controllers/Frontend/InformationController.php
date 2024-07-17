<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Page;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function showPages($slug1 = null, $slug2 = null)
    {
        try {

            $listInformation = Information::all();
            $listPages = Page::all();

            // Check điều kiện $slug1 and $slug2 
            if ($slug1 && $slug2) {
                // Check nếu không có $slug1 thì thoát ra trang 404
                $checkedInformation = Information::where("slug", $slug1)->first();
                if (!$checkedInformation) {
                    return redirect()->route('page-not-found');
                }

                // Tìm trang có $slug2 bên dưới thông tin tìm thấy
                $informationDetail = Page::where("slug", $slug2)
                    ->where("information_id", $checkedInformation->id)
                    ->first();

                if (!$informationDetail) {
                    return redirect()->route('page-not-found');
                }

                return view("frontend.information.index", [
                    'listInformation' => $listInformation,
                    'listPages' => $listPages,
                    'informationDetail' => $informationDetail,
                    'checkedInformation' => $checkedInformation->id,
                ]);
            } else {
                return redirect()->route('page-not-found');
            }
        } catch (\Exception $e) {
            return redirect()->route('page-not-found');
        }
    }
}
