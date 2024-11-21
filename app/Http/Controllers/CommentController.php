<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment($product_id, Request $request)
{
    $request->validate(
        [
            'content' => 'required'
        ],
        [
            'content.required' => 'Nội dung bình luận không được bỏ trống!'
        ]
    );

    // Tạo bình luận mới
    $data = [
        'content' => $request->input('content'),
        'product_id' => $product_id,
        'user_id' => auth()->user()->id,
        'parent_id' => $request->parent_id ?? 0,
    ];

    $addComment = Comment::create($data);

    // Lấy các bình luận có status = 1 cho sản phẩm
    $comment = Comment::where('product_id', $product_id)
                             ->where('status', 1)
                             ->get();

    return response()->json([
        'message' => 'Thêm bình luận thành công!',
        'data' => [
            'comment' => $comment,
            'user' => auth()->user(),
        ],
    ]);
}


    public function destroy(Comment $id)
    {
        $id->delete();
        return response()->json([
            'message' => 'Xóa bình luận thành công!'
        ]);
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'content' => 'required|string|max:255',
    ]);

    $comment = Comment::find($id);
    if (!$comment) {
        return response()->json(['error' => 'Comment not found'], 404);
    }

    $comment->content = $request->content;
    $comment->save();

    return response()->json([
        'success' => 'Comment updated successfully',
        'data' => $comment
    ]);
}

}
