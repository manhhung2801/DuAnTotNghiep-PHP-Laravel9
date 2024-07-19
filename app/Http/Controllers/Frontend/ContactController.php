<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact; // Ensure this is correctly imported
use App\Models\StoreAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index() {
        $storeAddress = StoreAddress::where("status", "=", 1)->orderBy("id", "asc")->limit(1)->get();
        return view('frontend.contact.index', compact('storeAddress'));
    }

    public function contact(Request $request) {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $content = $request->input('content'); // Corrected variable name

        if (Auth::check()) {
            $data = array();
            $data['user_id'] = Auth::id();
            $data['name'] = $name;
            $data['phone'] = $phone;
            $data['email'] = $email;
            $data['content'] = $content; // Corrected variable name

            Contact::create($data);

            return response()->json(['status' => true, 'message' => "đã gửi thành công"]);
        } else {
            return response()->json(['status' => false, 'message' => "Đăng nhập trước khi liên hệ với chúng rôi "]);
        }
    }
}
