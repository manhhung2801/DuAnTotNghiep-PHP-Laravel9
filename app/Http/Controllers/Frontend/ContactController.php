<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\StoreAddress;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        $storeAddress = StoreAddress::where("status", "=",1)->orderBy("id","asc")->limit(1)->get();
        
        return view('frontend.contact.index',compact('storeAddress'));
    }
}
