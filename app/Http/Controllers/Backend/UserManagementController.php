<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserManagementController extends Controller
{


    public function index(Request $request)
    {
        // Lấy danh sách tất cả các user, sắp xếp theo thứ tự mới nhất
        $users = User::latest();

        // Nếu có keyword trong request, thêm điều kiện tìm kiếm
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $users = $users->where(function($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%')
                    ->orWhere('email', 'like', '%' . $keyword . '%')
                    ->orWhere('role', 'like', '%' . $keyword . '%');
            });
        }

        // Phân trang kết quả với 15 user mỗi trang
        $users = $users->paginate(15);

        // Trả về view với dữ liệu danh sách user
        return view('admin.user-management.index', compact('users'));
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return response(['status' => 'success', 'Deleted User Successfully!']);
    }

    public function changeRole(Request $request)
    {

        $User = User::findOrFail($request->id);
        $User->role = $request->role == 'true' ? "admin" : "user";
        $User->save();
        return response(['message' => 'Role has been updated']);
    }

    public function changeStatus(Request $request)
    {

        $User = User::findOrFail($request->id);
        $User->status = $request->status == 'true' ? "active" : "inactive";
        $User->save();
        return response(['message' => 'Status has been updated']);
    }
}
