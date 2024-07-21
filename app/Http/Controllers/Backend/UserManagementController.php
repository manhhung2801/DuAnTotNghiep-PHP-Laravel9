<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserManagementController extends Controller
{


    public function index(Request $request)
    {

         $getUser = User::query(); // Khởi tạo query builder
        $validStatuses = ["user","admin"];
        // Sắp xếp theo role admin/user
        if (!empty(Request()->get('sort_role'))) {
            $sort_role = trim(Request()->get('sort_role'));
            if (in_array($sort_role, $validStatuses)) {
                $getUser->where('role', $sort_role);
            } 
            else {
                return view('404');
            }
        }
        // Sắp xếp theo ngày tạo
        if (!empty(Request()->get('sort_date'))) {
            $sort_date = trim(Request()->get('sort_date'));
            if ($sort_date == 'desc' || $sort_date == 'asc') {
                $getUser->orderBy('created_at', $sort_date);
            } else {
                return view('404');
            }
        }

        // Lấy danh sách tất cả các user, sắp xếp theo thứ tự mới nhất
        //$users = User::latest();

        // Nếu có keyword trong request, thêm điều kiện tìm kiếm
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $getUser = $getUser->where(function($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%')
                    ->orWhere('email', 'like', '%' . $keyword . '%')
                    ->orWhere('role', 'like', '%' . $keyword . '%');
            });
        }

        // Phân trang kết quả với 15 user mỗi trang
        $users = $getUser->paginate(15);

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
