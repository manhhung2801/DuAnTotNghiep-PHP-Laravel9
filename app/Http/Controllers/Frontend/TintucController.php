<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TintucController extends Controller
{
    function index()
    {
        return view('frontend.tintuc.tintuc');
    }
}
