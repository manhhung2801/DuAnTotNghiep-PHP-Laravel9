<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);
        return view("admin.user-management.index", compact('users'));
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
