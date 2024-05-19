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
        $sliders = Slider::latest();
        // search tìm kiếm theo type
        if (!empty($request->get('keyword'))) {
            $sliders = Slider::where('type', 'like', '%' . $request->get('keyword') . '%')->orWhere('title', 'like', '%' . $request->get('keyword') . '%');
        }
        $sliders = $sliders->paginate(5);
        return view("admin.slider.index", compact('sliders'));
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
        // $deletes = $slider->banner;
        // $banner = public_path('uploads/slider/' . $deletes);
        // if (file_exists($banner)) {
        //     if (unlink($banner)) {
        //         $slider->delete();
        //     }
        // }
        $slider->delete();
        return response(['status' => 'success','messge'=> 'Deleted Successfully!']);
    }
    public function changeStatus(Request $request)
    {

        $slider = Slider::findOrFail($request->id);
        $slider->status = $request->status == 'true' ? 1 : 0;
        $slider->save();
        return response(['message' => 'Status has been updated']);
    }
    public function showTrash(Request $request)
    {
        $sliders = Slider::getSliderTrashed();
         // search tìm kiếm theo type
         if (!empty($request->get('keyword'))) {
            $sliders = Slider::onlyTrashed()
        ->where('type', 'like', '%' . $request->get('keyword') . '%')
        ->orWhere('title', 'like', '%' . $request->get('keyword') . '%');
        } 
        return view('admin.slider.trash-list', compact('sliders'));
        // dfdgbnfn
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
}
