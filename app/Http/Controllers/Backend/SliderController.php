<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::paginate(15);
        return view("admin.slider.index", compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $deletes = $slider->banner;
        $banner = public_path('uploads/slider/' . $deletes);
        if (file_exists($banner)) {
            if (unlink($banner)) {
                $slider->delete();
            }
        }
        return response(['status' => 'success', 'Deleted Successfully!']);
    }
    public function changeStatus(Request $request)
    {

        $slider = Slider::findOrFail($request->id);
        $slider->status = $request->status == 'true' ? 1 : 0;
        $slider->save();
        return response(['message' => 'Status has been updated']);
    }
}
