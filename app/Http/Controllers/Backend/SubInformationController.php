<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\SubInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubInformationController extends Controller
{

    public function index(Request $request)
    {
        $subInformation = SubInformation::latest();
        if (!empty($request->get('keyword'))) {
            $subInformation = $subInformation->where('name', 'like', '%' . $request->get('keyword') . '%');
        }

        $subInformation = $subInformation->paginate(10);
        return view('admin.sub-information.index', compact('subInformation'));
    }


    public function create()
    {
        $information = Information::all();
        return view('admin.sub-information.create', compact('information'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'information' => ['required'],
            'name' => ['required', 'max:200', 'unique:sub_information,name'],
            'status' => ['required']
        ], [
            'information.required' => 'Danh mục không được để trống.',
            'name.required' => 'Tên không được để trống.',
            'name.max' => 'Tên không thể vượt quá 200 ký tự.',
            'name.unique' => 'Tên phải là duy nhất trong danh mục con.',
            'status.required' => 'Trạng thái không được để trống.',
        ]);

        $subInformation = new SubInformation();
        $subInformation->information_id = $request->information;
        $subInformation->name = $request->name;
        $subInformation->status = $request->status;
        $subInformation->slug = Str::slug($request->name);
        $subInformation->save();

        toastr('Tạo subInformation thành công!', 'success');

        return redirect()->route('admin.sub-information.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $information = Information::all();
        $subInformation = SubInformation::findOrFail($id);
        return view('admin.sub-information.edit', compact('information', 'subInformation'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'information' => ['required'],
            'name' => ['required', 'max:200', 'unique:sub_information,name,' . $id],
            'status' => ['required']
        ], [
            'information.required' => 'Danh mục không được để trống.',
            'name.required' => 'Tên không được để trống.',
            'name.max' => 'Tên không thể vượt quá 200 ký tự.',
            'name.unique' => 'Tên phải là duy nhất trong danh mục con.',
            'status.required' => 'Trạng thái không được để trống.',
        ]);

        $subInformation = SubInformation::findOrFail($id);
        $subInformation->information_id = $request->information;
        $subInformation->name = $request->name;
        $subInformation->status = $request->status;
        $subInformation->slug = Str::slug($request->name);

        $subInformation->save();

        toastr('Cập nhật thành công!', 'success');

        return redirect()->back();
    }


    public function destroy($id)
    {
        $subInformation = SubInformation::findOrFail($id);
        $subInformation->delete();

        return response(['status' => 'success', 'message' => 'Xoá thành công!']);
    }
    public function changeStatus(Request $request)
    {

        $information = SubInformation::findOrFail($request->id);
        $information->status = $request->status == 'true' ? 1 : 0;
        $information->save();
        return response(['message' => 'Thay đổi trạng thái thành công!']);
    }
}
