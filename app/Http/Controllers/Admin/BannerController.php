<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('id', 'desc')->paginate(5);
        return view('admin.pages.banners.index', compact('banners'));
    }
    public function create()
    {
        return view('admin.pages.banners.create');
    }
    public function store(BannerRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'status' => $request->status
            ];

            if ($request->hasFile('image')) {
                $path = $request->file('image')->storePublicly('public/banners');
                $data['image'] = Storage::url($path);
            }

            Banner::create($data);

            DB::commit();

            return redirect()->route('admin.banners.index')->with('status_succeed', 'Thêm thành công');
        } catch (Exception $e) {
            DB::rollBack();

            return back()->with('status_failed', 'Đã xảy ra lỗi');
        }
    }
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.pages.banners.edit', compact('banner'));
    }
    public function update(BannerRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $banner = Banner::find($id);
            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'status' => $request->status
            ];

            if ($request->hasFile('image')) {
                if($banner->image){
                    $path = 'public/banners/' . basename($banner->image);
                    if (Storage::exists($path)) {
                        Storage::delete($path);
                    }
                }
                $path = $request->file('image')->storePublicly('public/banners');
                $data['image'] = Storage::url($path);
            }

            $banner->update($data);

            DB::commit();

            return redirect()->route('admin.banners.index')->with('status_succeed', 'Cập nhật thành công');
        } catch (Exception $e) {
            DB::rollBack();

            return back()->with('status_failed', 'Đã xảy ra lỗi');
        }
    }
    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $banner = Banner::find($id);

            if($banner->image){
                $path = 'public/banners/' . basename($banner->image);
                if (Storage::exists($path)) {
                    Storage::delete($path);
                }
            }

            $banner->delete();

            DB::commit();

            return redirect()->route('admin.banners.index')->with('status_succeed', 'Xóa thành công');
        } catch (Exception $e) {
            DB::rollBack();

            return back()->with('status_failed', 'Đã xảy ra lỗi');
        }
    }


}
