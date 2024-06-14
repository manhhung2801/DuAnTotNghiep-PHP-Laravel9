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
        $message = session('message');
        $sliders = Slider::latest();
        // search tìm kiếm theo type
        if (!empty($request->get('keyword'))) {
            $sliders = Slider::where('type', 'like', '%' . $request->get('keyword') . '%')->orWhere('title', 'like', '%' . $request->get('keyword') . '%');
            if ($sliders->count() == 0) {
                session()->flash('message', 'Record Not Found');
            } else {
                session()->forget('message');
            }
        } else {
            session()->forget('message');
        }
        $sliders = $sliders->paginate(15);

        return view("admin.slider.index", compact('sliders', 'message'));
        // 
    }
    public function create()
    {
        return view('admin.slider.create');
    }


    public function store(Request $request)
    {
        $slider = new Slider;
        $request->validate([
            'type' => ['required', 'max:100'],
            'title' => ['required',],
            'starting_price' => ['required',],
            'btn_url' => ['required',],
            'serial' => ['required',],
            'status' => ['required',],
            'banner' => ['required', 'image']
        ]);
        if ($request->hasFile('banner')) {
            $banner = $request->banner;
            $ext = $banner->extension();
            $fileName = 'slider_' . uniqid() . '.' . $ext;
            $banner->move(public_path('uploads/slider'), $fileName);
            $slider->banner = $fileName;
        }
        $slider->type = $request->type;
        $slider->title = $request->title;
        $slider->starting_price = $request->starting_price;
        $slider->btn_url = $request->btn_url;
        $slider->serial = $request->serial;
        $slider->status = $request->status;
        $slider->save();
        // Set a success toast, with a title
        toastr()->success('Admin successfully added slider');
        return redirect()->back();
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => ['required', 'max:100'],
            'title' => ['required'],
            'starting_price' => ['required'],
            'btn_url' => ['required'],
            'serial' => ['required'],
            'status' => ['required'],
            'banner' => ['image']
        ]);
        $slider = Slider::find($id);
        if ($request->hasFile('banner')) {
            if (File::exists(public_path('uploads/slider/' . $request->banner))) {
                File::delete(public_path('uploads/slider/' . $request->banner));
            } else {
                $slider->banner = $request->banner;
            }
            $banner = $request->banner;
            $ext = $banner->extension();
            $fileName = 'slider_' . uniqid() . '.' . $ext;
            $banner->move(public_path('uploads/slider'), $fileName);
            $slider->banner = $fileName;
        }
        $slider->type = $request->type;
        $slider->title = $request->title;
        $slider->starting_price = $request->starting_price;
        $slider->btn_url = $request->btn_url;
        $slider->serial = $request->serial;
        $slider->status = $request->status;
        $slider->save();
        toastr()->success('Admin updated slider successfully');
        return redirect()->back();
    }


    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return response(['status' => 'success', 'messge' => 'Deleted Successfully!']);
    }

    public function showTrash(Request $request)
    {
        $message = session('message');
        $getSliders = Slider::onlyTrashed()->latest();

        // search tìm kiếm theo type
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $getSliders = $getSliders->where('type', 'like', '%' . $request->get('keyword') . '%')->orWhere('title', 'like', '%' . $request->get('keyword') . '%');
            if ($getSliders->count() == 0) {
                session()->flash('message', 'Record Not Found');
            } else {
                session()->forget('message');
            }
        } else {
            session()->forget('message');
        }
        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        $getSliders = $getSliders->paginate(15);
        // Nếu $getSliders rỗngz
        if ($getSliders->isEmpty()) {
            session()->flash('message', 'Record Not Found');
            return view('admin.slider.trash-list', compact('getSliders'));
        }
        // Trả về view với dữ liệu các category đã bị xóa
        return view('admin.slider.trash-list', compact('getSliders'));
    }
    public function destroyTrash($id)
    {
        try {
            Slider::destroyTrashedItem($id);
            return response(['status' => 'success', 'Deleted Forever Successfully!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'Deleted Faild! ' . $e . '']);
        }
    }
    public function restoreTrash($id)
    {
        try {
            Slider::restoreTrashed($id);
            return response(['status' => 'success', 'Successfully!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'message' => 'Restore Faild ' . $e . '']);
        }
    }
    public function changeStatus(Request $request)
    {
        $slider = Slider::findOrFail($request->id);
        $slider->status = $request->status == 'true' ? 1 : 0;
        $slider->save();
        return response(['message' => 'Status has been updated']);
    }
}
