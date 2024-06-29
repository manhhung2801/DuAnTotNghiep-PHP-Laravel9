<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Page;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function showPages($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $pages_2 = Page::where('slug', $slug)->firstOrFail();
        return view("frontend.information.index", compact('page','pages_2'));
    }
}
