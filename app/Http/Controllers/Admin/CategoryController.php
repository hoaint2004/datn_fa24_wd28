<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.pages.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.pages.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        DB::beginTransaction();
        try {

            $data = [
                'name' => $request->name,
                'status' => $request->status
            ];

            if ($request->hasFile('image')) {
                $path = $request->file('image')->storePublicly('public/categories');
                $data['image'] = Storage::url($path);
            }

            Category::create($data);

            DB::commit();

            return redirect()->route('admin.categories.index')->with('status_succeed', 'Thêm thành công');
        } catch (Exception $e) {
            DB::rollBack();

            return back()->with('status_failed', 'Đã xảy ra lỗi');
        }
    }

    public function edit($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return back()->with('status_failed', 'Không tìm thấy danh mục');
        }

        return view('admin.pages.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        DB::beginTransaction();
        try {

            $category = Category::find($id);

            if (!$category) {
                return back()->with('status_failed', 'Không tìm thấy danh mục');
            }

            $data = [
                'name' => $request->name,
                'status' => $request->status
            ];

            if ($request->hasFile('image')) {
                if ($category->image) {
                    $path = 'public/categories/' . basename($category->image);
                    if (Storage::exists($path)) {
                        Storage::delete($path);
                    }
                }

                $path = $request->file('image')->storePublicly('public/categories');
                $data['image'] = Storage::url($path);
            }

            $category->update($data);

            DB::commit();

            return redirect()->route('admin.categories.index')->with('status_succeed', 'Thêm thành công');
        } catch (Exception $e) {
            DB::rollBack();

            return back()->with('status_failed', 'Đã xảy ra lỗi');
        }
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $category = Category::find($id);

            if (!$category) {
                return back()->with('status_failed', 'Không tìm thấy danh mục');
            }

            if ($category->image) {
                $path = 'public/categories/' . basename($category->image);
                if (Storage::exists($path)) {
                    Storage::delete($path);
                }
            }

            $category->delete();

            DB::commit();

            return redirect()->route('admin.categories.index')->with('status_succeed', 'Xóa thành công');
        } catch (Exception $e) {
            DB::rollBack();

            return back()->with('status_failed', 'Đã xảy ra lỗi');
        }
    }
}