<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Page;
use App\Models\SubInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PagesController extends Controller
{

    public function index(Request $request)
    {
        $pages = Page::query(); // Start with a clean query builder

        if (!empty($request->get('keyword'))) {

            $pages = $pages->where('name', 'like', '%' . $request->get('keyword') . '%');
        }


        // Paginate with 10 items per page
        $pages = $pages->paginate(10);

        return view("admin.pages.index", compact('pages'));
    }

    public function create()
    {
        $information = Information::where('status', 1)->get();
        return view("admin.pages.create",compact('information'));
    }

    public function getSubInformation(Request $request)
    {
        $subInformation = SubInformation::where('information_id', $request->id)->where('status', 1)->get();
        return $subInformation;
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'information_id' => ['required'],
                'sub_information_id' => ['required'],
                'name' => ['required', 'max:255'],
                'long_description' => ['required'],

            ],
            [
                'information_id.required' => "Danh mục trang không được để trống. ",
                'sub_information_id.required' => "Danh mục trang phụ không được để trống. ",
                'long_description.required' => "Nội dung không được để trống. ",
                "name.required" => "Tên không được để trống",
            ]
        );

        $pages = new Page();
        $pages->name = $request->name;
        $pages->information_id = $request->information_id;
        $pages->sub_information_id = $request->sub_information_id;
        $pages->slug = Str::slug($request->name);
        $pages->long_description = $request->long_description;
        $pages->status = $request->status;
        $pages->save();
        
        toastr()->success("Thêm " . $request->name . " Thành công");
        return redirect()->back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $pages = Page::findOrFail($id);
        
        $information = Information::where('status', 1)->get();

        return view('admin.pages.edit', compact('pages','information'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'information_id' => ['required'],
                'sub_information_id' => ['required'],
                'name' => ['required', 'max:255'],
                'long_description' => ['required'],

            ],
            [
                'information_id.required' => "Danh mục trang không được để trống. ",
                'sub_information_id.required' => "Danh mục trang phụ không được để trống. ",
                'long_description.required' => "Nội dung không được để trống. ",
                "name.required" => "Tên không được để trống",
            ]
        );

        $pages =  Page::findOrFail($id);
        $pages->name = $request->name;
        $pages->slug = !empty(Str::slug($request->slug, '-')) ? Str::slug($request->slug, '-') : Str::slug($request->name, '-');
        $pages->information_id = $request->information_id;
        $pages->sub_information_id = $request->sub_information_id;
        $pages->slug = Str::slug($request->name);
        $pages->long_description = $request->long_description;
        $pages->status = $request->status;
        $pages->save();
        
        toastr()->success('Tạo mới thành công!', 'success');

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
        $pages = Page::findOrFail($id);
        $pages->delete();

        return response(['status' => 'success', 'message' => 'Đã xoá thành công!']);
    }

    public function changeStatus(Request $request)
    {
        $pages =  Page::findOrFail($request->id);
        $pages->status = $request->status == 'true' ? 1 : 0;
        $pages->save();
        return response(['message' => 'Trạng thái đã thay đổi']);
    }
}
