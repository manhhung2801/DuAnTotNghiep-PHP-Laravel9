<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Page;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function showPages($slug1, $slug2)
    {
        $ListInformation = Information::all();
        $ListPage = Page::all();
        $ckeckIdListInformation = Information::where("slug", $slug1)->first();

        if ($ckeckIdListInformation) {
            $Informationdetai = Page::where("slug", $slug2)
                ->where("information_id", $ckeckIdListInformation->id)
                ->first();

            return view("frontend.information.index", [
                'ListInformation' => $ListInformation,
                'ListPage' => $ListPage,
                'Informationdetai' => $Informationdetai,
                'ckeckIdListInformation' => $ckeckIdListInformation->id,

            ]);
        } else {
            // Handle the case when $ckeckIdListInformation is null
            return redirect()->back()->with('error', 'No information found for the given slug.');
        }
    }
}
