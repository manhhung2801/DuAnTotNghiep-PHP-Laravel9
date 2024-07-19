<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Exception;
use Illuminate\Validation\ValidationException;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(Request $request)
    {


        $contacts = contact::latest();
        // search tìm kiếm theo type
        if (!empty($request->get('keyword'))) {
            $contacts = contact::where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        $contacts = $contacts->paginate(15);

        return view('admin.contact.index', ['contact' => $contacts]);
    }


    public function trashedcontact(Request $request)
    {


        $contact = contact::paginate(15);

        // Nếu có keyword trong request, thêm điều kiện tìm kiếm
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $contact = $contact->where('title', 'like', '%' . $keyword . '%');
        }

        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        $contact = $contact->get();

        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        return view('admin.post.trashlist', compact('contact'));
    }

    public function destroy($id)
    {

        try {
            contact::findOrFail($id)->delete();
            return response(['status' => 'success', 'Deleted Successfully!']);
        } catch (ValidationException $e) {
            toastr()->error('Lỗi: ' . $e);
        }
    }



    public function showTrash(Request $request)
    {
        $getcontact = contact::onlyTrashed()->latest();
        // search tìm kiếm theo type
        if (!empty($request->get('keyword'))) {
            $keyword = $request->get('keyword');
            $getcontact = $getcontact->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        // Lấy danh sách các category đã bị xóa và áp dụng điều kiện tìm kiếm nếu có
        $getcontact = $getcontact->paginate(15);

        // Trả về view với dữ liệu các category đã bị xóa
        return view('admin.contact.trash-list', compact('getcontact'));
    }


    public function destroyTrash($id)
    {
        try {
            contact::destroyTrashedItem($id);
            return response(['status' => 'success', 'Deleted Forever Successfully!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'Deleted Faild! ' . $e . '']);
        }
    }

    public function restoreTrash($id)
    {
        try {
            contact::restoreTrashed($id);
            return response(['status' => 'success', 'Successfully!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'message' => 'Restore Faild ' . $e . '']);
        }
    }
    public function show($id)
    {
        $getContact = contact::findOrFail($id);
        return response()->json([$getContact]);
    }
    function feedback(Request $request)
    {
        $feedback = $request->feedback;
        $user_id = $request->user_id;
        $findContact = contact::where('id', $user_id)->first();

        $findContact->user_id = $findContact->user_id;
        $findContact->name = $findContact->name;
        $findContact->email = $findContact->email;
        $findContact->phone = $findContact->phone;
        $findContact->content = $findContact->content;
        $findContact->feedback = $feedback;


        $findContact->update();

        toastr()->success('Đã Xem');
        return response([$findContact]);
    }


    function answered($id)
    {
        $feedback = "answered";
        $findContact = contact::where('id', $id)->first();

        $findContact->user_id = $findContact->user_id;
        $findContact->name = $findContact->name;
        $findContact->email = $findContact->email;
        $findContact->phone = $findContact->phone;
        $findContact->content = $findContact->content;
        $findContact->feedback = $feedback;


        $findContact->update();

        toastr()->success('Phản hồi');
        return redirect()->route('admin.AdminContact');

    }
}
