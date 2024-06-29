<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\SubInformation;
use Illuminate\Http\Request;

class InformationController extends Controller
{
   
    public function index(Request $request)
    {
        $information = Information::query(); // Start with a clean query builder

        if(!empty($request->get('keyword'))) {

            $information = $information->where('name', 'like', '%'.$request->get('keyword').'%');
        }

       // Order by rank in ascending order
        $information = $information->orderBy('rank', 'asc');

        // Paginate with 10 items per page
        $information = $information->paginate(10);

        return view("admin.information.index", compact('information'));
    }

    
    public function create()
    {
        return view("admin.information.create");
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:200'],
            'rank' => ['numeric'],
            'status' => ['required'],
        ], [
            'name.required' => 'Tên trang không được để trống.',
            'rank.numeric' => 'Thứ hạng phải là một số.',
        ]);

        $information = new Information();
        $information->name = $request->name;
        $information->rank = $request->rank;
        $information->status = $request->status;
        $information->save();
        // Set a success toast, with a title
        toastr()->success('Tạo mới thành công!', 'success');

        return redirect()->back();
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $information = Information::findOrFail($id);
        return view('admin.information.edit', compact('information'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:200'],
            'rank' => ['numeric', function ($attribute, $value, $fail) use ($id) {
                $count = Information::where('rank', $value)
                    ->where('id', '!=', $id)
                    ->count();
    
                if ($count > 0) {
                    $fail('Thứ hạng đã được sử dụng.');
                }
            }],
            'status' => ['required'],
        ], [
            'name.required' => 'Tên trang không được để trống.',
            'rank.numeric' => 'Thứ hạng phải là một số.',
            'rank.unique' => 'Thứ hạng đã được sử dụng.',
        ]);

        $information = new Information();
        $information->name = $request->name;
        $information->rank = $request->rank;
        $information->status = $request->status;
        $information->save();
        // Set a success toast, with a title
        toastr()->success('Cập nhật thành công!', 'success');

        return redirect()->back();
    }

   
    public function destroy($id)
    {
        $information = Information::findOrFail($id);
        $subInformation = SubInformation::where('information_id', $information->id)->count();
        if ($subInformation > 0) {
            return response(['status' => 'error', 'message' => 'Mục này chứa, các Sub Information để xóa mục này bạn phải xóa các mục phụ trước!']);
        }

        $information->delete();

        return response(['status' => 'success', 'Đã xóa thành công!']);
    }

    public function changeStatus(Request $request)
    {
        $information = Information::findOrFail($request->id);
        $information->status = $request->status == 'true' ? 1 : 0;
        $information->save();
        return response(['message' => 'Trạng thái đã được cập nhật']);
    }
}
