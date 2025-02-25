<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{

    public function index(Request $request)
    {
        $sliders = Slider::query();
        $sortBy = $request->query('sort');
        // search tìm kiếm theo type
        if (!empty($request->get('keyword'))) {
            $sliders = Slider::where('type', 'like', '%' . $request->get('keyword') . '%')
                ->orWhere('title', 'like', '%' . $request->get('keyword') . '%');
        }
        // Sắp xếp theo trạng thái
        if ($request->filled('check_status')) {
            $check_status = $request->get('check_status');
            if ($check_status == '1') {
                $sliders = $sliders->where('status', 1);
            } elseif ($check_status == '0') {
                $sliders = $sliders->where('status', 0);
            }
        }
        // Sắp xếp theo ngày tạo
        if ($request->filled('sort_date')) {
            $sort_date = $request->get('sort_date');
            if ($sort_date === 'asc' || $sort_date === 'desc') {
                $sliders->orderBy('created_at', $sort_date);
            }
        }

        $sliders = $sliders->paginate(15)->appends(request()->query());
        return view("admin.slider.index", compact('sliders'));
    }
    public function create()
    {
        return view('admin.slider.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'type' => ['required', 'string', 'max:200'],
            'title' => ['required', 'string', 'max:200'],
            'btn_url' => [
                'required',
            ],
            'status' => ['required'],
            'banner' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048']
        ], [
            'type.required' => 'Kiểu không được để trống',
            'type.max' => 'Kiểu không được quá 200 từ',
            'title.required' => 'Tiêu đề không được để trống',
            'title.max' => 'Tiêu đề không được quá 200 từ',
            'btn_url.required' => 'Đường dẫn không được để trống',
            'banner.required' => 'Hình ảnh không được để trống',
            'banner.mimes' => 'Hình ảnh phải là một trong các định dạng sau: jpeg,png,jpg,gif,svg,webp',
            'banner.max' => 'Kích thước hình ảnh không được quá 2048',
        ]);

        $slider = new Slider;
        $slider->type = $request->type;
        $slider->title = $request->title;
        $slider->btn_url = $request->btn_url;
        $slider->status = $request->status;

        if ($request->hasFile('banner')) {
            $image = $request->file('banner');
            $imageName = 'slider_' . time() . '.' . $image->extension();
            $image->move(public_path('uploads/slider'), $imageName);
            $slider->banner = $imageName;
        }

        $slider->save();
        toastr()->success('Thêm Thanh trượt thành công!', 'Thành Công');
        return redirect()->back();
    }


    public function show($id) {}


    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => ['required', 'string', 'max:200'],
            'title' => ['required', 'string', 'max:200'],
            'btn_url' => ['required',],
            'status' => ['required'],
            'banner' => ['image', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048']
        ], [
            'type.required' => 'Kiểu không được để trống',
            'type.max' => 'Kiểu không được quá 200 từ',
            'title.required' => 'Tiêu đề không được để trống',
            'title.max' => 'Tiêu đề không được quá 200 từ',
            'btn_url.required' => 'Đường dẫn không được để trống',
            'banner.mimes' => 'Hình ảnh phải là một trong các định dạng sau: jpeg,png,jpg,gif,svg,webp',
            'banner.max' => 'Kích thước hình ảnh không được quá 2048',
        ]);
        $slider = Slider::findOrFail($id);
        $slider->type = $request->type;
        $slider->title = $request->title;
        $slider->btn_url = $request->btn_url;
        $slider->status = $request->status;

        if ($request->hasFile('banner')) {
            if (File::exists(public_path("uploads/slider/{$slider->banner}"))) {
                File::delete(public_path("uploads/slider/{$slider->banner}"));
            }
            $image = $request->file('banner');
            $imageName  = 'slider_' . time() . '.' . $image->extension();
            $image->move(public_path('uploads/slider'), $imageName);
            $slider->banner = $imageName;
        }
        $slider->save();
        toastr()->success('Cập nhật thanh trượt thành công ', 'Thành công');
        return redirect()->back();
    }


    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return response(['status' => 'success', 'message' => 'Xoá thành công!']);
    }

    public function showTrash(Request $request)
    {
        $getSliders = Slider::onlyTrashed()->latest();

        // search tìm kiếm theo type
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $getSliders = $getSliders->where('type', 'like', '%' . $request->get('keyword') . '%')->orWhere('title', 'like', '%' . $request->get('keyword') . '%');
        }
        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        $getSliders = $getSliders->paginate(15);
        // Nếu $getSliders rỗngz
        // Trả về view với dữ liệu các category đã bị xóa
        return view('admin.slider.trash-list', compact('getSliders'));
    }
    public function destroyTrash($id)
    {
        try {
            $slider = Slider::withTrashed()->findOrFail($id);

            if (File::exists(public_path("uploads/slider/{$slider->banner}"))) {
                File::delete(public_path("uploads/slider/{$slider->banner}"));
            }

            Slider::destroyTrashedItem($id);

            return response(['status' => 'success', 'Xóa vĩnh viễn thành công!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'Xóa vĩnh viễn thất bại! ' . $e . '']);
        }
    }
    public function restoreTrash($id)
    {
        try {
            Slider::restoreTrashed($id);
            return response(['status' => 'success', 'Khôi phục thành công!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'message' => 'Khôi phục thất bại ' . $e . '']);
        }
    }
    public function changeStatus(Request $request)
    {
        $slider = Slider::findOrFail($request->id);
        $slider->status = $request->status == 'true' ? 1 : 0;
        $slider->save();
        return response(['message' => 'Trạng thái đã được cập nhật']);
    }
}
