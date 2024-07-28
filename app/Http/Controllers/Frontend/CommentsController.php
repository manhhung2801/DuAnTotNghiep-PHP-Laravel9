<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Exception;
use App\Models\ProductComments;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{

    public function getComments(Request $request, $productId)
    {
        try {
            $comments = ProductComments::where('product_id', $productId)
                ->with('user')
                ->orderBy('created_at', 'desc')
                ->get();

            return response()->json([
                'status' => true,
                'data' => $comments
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error retrieving comments',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function commentPost(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'message' => 'required|string|max:500|min:3',
            'user_id' => 'required|integer|exists:users,id',
            'product_id' => 'required|integer|exists:products,id',
        ], [
            'message.required' => 'Vui lòng nhập bình luận trước khi submit',
            'message.min' => 'Nội dung bình luận quá ngắn',
            'user_id.required' => 'Vui lòng đăng nhập để thực hiện chức năng bình luận',
            'user_id.exists' => 'Taif khoản không tồn tại',
            'product_id.required' => 'Vui lòng chọn sản phẩm bình luận',
            'product_id.exists' => 'Sản phẩm không tồn tại',
        ]);

        try {
            if (!$user->id || $user->id !== $validated['user_id']) {
                $comment = new ProductComments();
                $comment->user_id = $user->id;
                $comment->user_type = $user->role;
                $comment->product_id = $validated['product_id'];
                $comment->message = $validated['message'];
                $comment->save();
                return response()->json(['status' => true, 'message' => 'Bình luận thành công']);
            } else {
                return response()->json(['status' => false, 'message' => 'Tài khoản không tồn tại trong hệ thống']);
            }
        } catch (Exception $error) {
            return response()->json(['status' => false, 'message' => 'Lỗi server', 'error' => $error]);
        }
    }
}
