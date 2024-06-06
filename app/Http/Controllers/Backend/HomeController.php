<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Coupons;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()  {

        $countUser = User::get()->count();
        $coutProuduct = User::get()->count();
        $coutCoupon = Coupons::get()->count();
        return view('admin.home.index', [
            'countUser' => $countUser,
            'coutProuduct' => $coutProuduct,
            'coutCoupon' => $coutCoupon,
        ]);

    }
}
