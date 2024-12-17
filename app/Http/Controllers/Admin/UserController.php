<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all(); // Lấy tất cả user
        return view('admin.pages.users.index', compact('users'));
    }

    // Cập nhật trạng thái user
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:active,inactive',
        ]);

        $user = User::findOrFail($id);
        $user->status = $request->status; // Cập nhật trạng thái
        $user->save();

        return back()->with('success', 'Trạng thái người dùng đã được cập nhật!');
    }
}