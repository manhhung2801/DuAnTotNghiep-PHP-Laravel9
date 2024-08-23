<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Exception;

class PageCategoryController extends Controller
{
    public function index(Request $request)
    {
        $pageCategories = PageCategory::query();

        if (!empty($request->get('keyword'))) {

            $pageCategories = $pageCategories->where('name', 'like', '%' . $request->get('keyword') . '%');
        }

        if ($request->filled('sort_rank')) {
            $sort_rank = $request->get('sort_rank');
            if ($sort_rank === 'asc' || $sort_rank === 'desc') {
                $pageCategories->orderBy('rank', $sort_rank);
            }
        }

        if ($request->filled('check_status')) {
            $check_status = $request->get('check_status');
            if ($check_status == '1') {
                $pageCategories = $pageCategories->where('status', 1);
            } elseif ($check_status == '0') {
                $pageCategories = $pageCategories->where('status', 0);
            }
        }

        if ($request->filled('sort_date')) {
            $sort_date = $request->get('sort_date');
            if ($sort_date === 'asc' || $sort_date === 'desc') {
                $pageCategories->orderBy('created_at', $sort_date);
            }
        }
        $pageCategories = $pageCategories->paginate(15)->appends(request()->query());
        return view("admin.page-category.index", compact('pageCategories'));
    }


    public function create()
    {
        return view("admin.page-category.create");
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:200'],
            'rank' => ['required', 'numeric', 'unique:page_categories,rank'],
            'status' => ['required'],
        ], [
            'name.required' => 'Tên trang không được để trống.',
            'rank.required' => 'Thứ hạng không được để trống.',
            'rank.numeric' => 'Thứ hạng phải là một số.',
            'rank.unique' => 'Thứ hạng đã tồn tại.',
        ]);

        $pageCategories = new PageCategory();
        $pageCategories->name = $request->name;
        $pageCategories->slug = Str::slug($request->name);
        $pageCategories->rank = $request->rank;
        $pageCategories->status = $request->status;
        $pageCategories->save();

        toastr()->success('Tạo mới thành công!', 'success');
        return redirect()->back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $pageCategories = PageCategory::findOrFail($id);
        return view('admin.page-category.edit', compact('pageCategories'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:200'],
            'rank' => ['required', function ($attribute, $value, $fail) use ($id) {
                $count = PageCategory::where('rank', $value)
                    ->where('id', '!=', $id)
                    ->count();

                if ($count > 0) {
                    $fail('Thứ hạng đã được sử dụng.');
                }
            }],
            'status' => ['required'],
        ], [
            'name.required' => 'Tên trang không được để trống.',
            'rank.required' => 'Thứ hạng không được để trống.',
            'rank.unique' => 'Thứ hạng đã được sử dụng.',
        ]);

        $pageCategories = PageCategory::findOrFail($id);
        $pageCategories->name = $request->name;
        $pageCategories->slug = !empty(Str::slug($request->slug, '-')) ? Str::slug($request->slug, '-') : Str::slug($request->name, '-');
        $pageCategories->rank = $request->rank;
        $pageCategories->status = $request->status;
        $pageCategories->save();

        toastr()->success('Cập nhật thành công!', 'success');
        return redirect()->back();
    }


    public function destroy($id)
    {
        $pageCategories = PageCategory::findOrFail($id);
        $pages = Page::where('page_category_id', $pageCategories->id)->count();
        if ($pages > 0) {
            return response(['status' => 'error', 'message' => 'Mục này chứa, các trang không thể xoá!']);
        }

        $pageCategories->delete();
        return response(['status' => 'success', 'Đã xóa thành công!']);
    }

    public function showTrash(Request $request)
    {
        $getPageCategorys = PageCategory::onlyTrashed()->latest();

        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $getPageCategorys = $getPageCategorys->where('name', 'like', '%' . $request->get('keyword') . '%');
        }

        $getPageCategorys = $getPageCategorys->paginate(15);
        return view('admin.page-category.trash-list', compact('getPageCategorys'));
    }
    public function destroyTrash($id)
    {
        try {
            PageCategory::destroyTrashedItem($id);
            return response(['status' => 'success', 'Xóa vĩnh viễn thành công!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'Xóa vĩnh viễn thất bại! ' . $e . '']);
        }
    }
    public function restoreTrash($id)
    {
        try {
            PageCategory::restoreTrashed($id);
            return response(['status' => 'success', 'Khôi phục thành công!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'message' => 'Khôi phục thất bại ' . $e . '']);
        }
    }

    public function changeStatus(Request $request)
    {
        $pageCategories = PageCategory::findOrFail($request->id);
        $pageCategories->status = $request->status == 'true' ? 1 : 0;
        $pageCategories->save();
        return response(['message' => 'Trạng thái đã được cập nhật']);
    }
}
