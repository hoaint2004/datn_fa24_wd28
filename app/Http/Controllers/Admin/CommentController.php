<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::orderBy('id', 'desc')->paginate(10);

        return view('admin.pages.comments.index', compact('comments'));
    }

    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('admin.pages.comments.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $comment = Comment::find($id);

            $comment->status = $request->status;
            $comment->save();

            DB::commit();

            return redirect()->route('admin.comments.index')->with('status_succeed', 'Cập nhật thành công');
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('status_failed', $e->getMessage());
        }
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $comment = Comment::find($id);

            if (!$comment) {
                return back()->with('status_failed', 'Không tìm thấy bình luận');
            }

            $comment->delete();

            DB::commit();

            return redirect()->route('admin.comments.index')->with('status_succeed', 'Xóa thành công');
        } catch (Exception $e) {
            DB::rollBack();

            return back()->with('status_failed', 'Đã xảy ra lỗi');
        }
    }
}