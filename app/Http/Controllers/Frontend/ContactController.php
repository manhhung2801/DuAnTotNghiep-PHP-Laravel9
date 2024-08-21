<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use App\Models\Contact; // Ensure this is correctly imported
use App\Models\StoreAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $storeAddress = StoreAddress::where("status", "=", 1)->orderBy("id", "asc")->limit(1)->get();
        return view('frontend.contact.index', compact('storeAddress'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name'  => ['required', 'max:20'],
            'phone' => ['required', 'max:10', 'regex:/^0[3-9][0-9]{8}$/'],
            'email' => ['required', 'email'],
            'content' => ['required', 'max:200'],
        ], [
            'name.required' => 'Tên không được để trống',
            'phone.required' => 'Điện thoại không được để trống',
            'phone.max' => 'Điện thoại không được quá 10 ký tự',
            'phone.regex' => 'Điện thoại phải bắt đầu bằng số 0 và đủ 10 chữ số',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không hợp lệ',
            'content.required' => 'Nội dung không được để trống',
            'content.max' => 'Nội dung không được quá 200 ký tự',
        ]);

        if (Auth::check()) {
            $data = array();
            $data['user_id'] = Auth::id();
            $data['name'] = $request->input('name');
            $data['phone'] = $request->input('phone');
            $data['email'] = $request->input('email');
            $data['content'] = $request->input('content');
            // gửi địa chỉ email 
            try {
                Mail::to('nguyenkhanhhuy1229@gmail.com')->send(new ContactEmail($data));
                return response()->json(['status' => true, 'message' => "Đã gửi thành công"]);
            } catch (\Exception $e) {
                return response()->json(['status' => false, 'message' => "Đã xảy ra lỗi khi gửi email"]);
            }
        } else {
            return response()->json(['status' => false, 'message' => "Đăng nhập trước khi liên hệ với chúng tôi"]);
        }
    }
}
