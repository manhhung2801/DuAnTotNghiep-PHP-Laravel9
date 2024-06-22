<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Coupons;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        if (!empty(\Auth::check()) && \Auth::user()->role == "admin") {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login');
    }
    public function dashboard(){

        $countUser = User::get()->count();
        $coutProuduct = User::get()->count();
        $coutCoupon = Coupons::get()->count();
        $coutSlider = Slider::get()->count();

        return view('admin.dashboard',[
            'countUser' => $countUser,
            'coutProuduct' => $coutProuduct,
            'coutCoupon' => $coutCoupon,
            'coutSlider' => $coutSlider,
        ]);
    }

}
