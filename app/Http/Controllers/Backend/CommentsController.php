<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductComments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Exception;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $getComment = ProductComments::getComment();
        $getComment = ProductComments::with('user', 'product')
            ->get()
            ->groupBy('product_id');

        if (!empty(Request()->get('keyword'))) {
            $keyword = trim(Request()->get('keyword'));
            $getComment->where('name', 'like', '%' . $keyword . '%');
        }

        return view('admin.comment.index', compact('getComment'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            ProductComments::findOrFail($id)->delete();
            return response(['status' => 'success', 'message' => 'Xóa bình luận thành công!']);
        } catch (ValidationException $e) {
            return response(['status' => 'error', 'message' => 'Xóa thất bại! ' . $e . '']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commentDetail = ProductComments::where(['product_id', $id]);
        return response()->json(['data' => $commentDetail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        //
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
        //
    }
}
