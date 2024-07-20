<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Page;
use App\Models\SubInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InformationController extends Controller
{

    public function index(Request $request)
    {
        $information = Information::query(); // Start with a clean query builder

        if (!empty($request->get('keyword'))) {

            $information = $information->where('name', 'like', '%' . $request->get('keyword') . '%');
        }

        // Sắp xếp theo rank tăng hoặc giảm 
        if ($request->filled('sort_rank')) {
            $sort_rank = $request->get('sort_rank');
            if ($sort_rank === 'asc' || $sort_rank === 'desc') {
                $information->orderBy('rank', $sort_rank);
            }
        }

        // Sắp xếp theo trạng thái
        if ($request->filled('check_status')) {
            $check_status = $request->get('check_status');
            if ($check_status == '1') {
                $information = $information->where('status', 1);
            } elseif ($check_status == '0') {
                $information = $information->where('status', 0);
            }
        }

        // Sắp xếp theo ngày tạo
        if ($request->filled('sort_date')) {
            $sort_date = $request->get('sort_date');
            if ($sort_date === 'asc' || $sort_date === 'desc') {
                $information->orderBy('created_at', $sort_date);
            }
        }




        // Paginate with 10 items per page
        $information = $information->paginate(15)->appends(request()->query());

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
            'rank' => ['required', 'numeric', 'unique:information,rank'],
            'status' => ['required'],
        ], [
            'name.required' => 'Tên trang không được để trống.',
            'rank.required' => 'Thứ hạng không được để trống.',
            'rank.numeric' => 'Thứ hạng phải là một số.',
            'rank.unique' => 'Thứ hạng đã tồn tại.',
        ]);

        $information = new Information();
        $information->name = $request->name;
        $information->slug = Str::slug($request->name);
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

        $information = Information::findOrFail($id);
        $information->name = $request->name;
        $information->slug = !empty(Str::slug($request->slug, '-')) ? Str::slug($request->slug, '-') : Str::slug($request->name, '-');
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
        $pages = Page::where('information_id', $information->id)->count();
        if ($pages > 0) {
            return response(['status' => 'error', 'message' => 'Mục này chứa, các trang không thể xoá!']);
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
