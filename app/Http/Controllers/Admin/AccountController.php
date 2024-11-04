<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\accountRequest;
use App\Models\User;
use Exception;
use Nette\Utils\Random;

class AccountController extends Controller
{

// LIST USER
    public function account(){

        $listAccount = session('listAccount', User::all());  
        // hoặc User::paginate(5);
        return view('admin.account')->with('listAccount',$listAccount);

    }

// FORM CREATE

    public function create(){
        return view('admin.account.create');
    }

// SAVE CREATE

    public function save(accountRequest $request){
        User::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            // hoặc dùng bcrypt() vào passowrd để mã hóa dữ liệu
            'role' => $request->role,
            // 'remember_token'=>$remember_token,
        ]);


        return redirect()->route('account.management')->with(['mesages'=>'create success']);
    }

    public function edit($id){
        $acc=User::find($id);
        return view('admin.account.edit')->with(['acc'=>$acc]);
    }

// UPDATE

    public function update(AccountRequest $request) {
        $user = User::find($request->id);
    
        // Kiểm tra xem người dùng có tồn tại không
        if (!$user) {
            return redirect()->back()->with('message', 'User not found');
        }
    
        // Cập nhật thông tin người dùng
        $user->update([
            'fullname' => $request->fullname,
            // 'username' => $request->username,
            // 'email' => $request->email,
            'role' => $request->role,
        ]);
    
        // Chuyển hướng về trang quản lý tài khoản với thông báo thành công
        return redirect()->route('account.management')->with('message', 'Update success');
    }
    


// DELETE

    public function delete($id){
        try{
            User::find($id)->delete();
            return redirect()->back()->with(['message'=>'delete success']);
        }catch(Exception $e){
        
            return redirect()->back()->with(['message'=>'có lỗi ràng buộc bên dữ liệu SQL hoặc người dùng này vẫn còn đơn hàng khi xóa tài khoản '.User::find($id)->username]);
        }
    }

// SEARCH

    public function search(Request $request)
    {
    $search = $request->search;

    // Kiểm tra nếu có giá trị tìm kiếm
    if (empty($search)) {
        return redirect()->back()->with(['message' => 'Vui lòng nhập giá trị tìm kiếm']);
    }

    // Lấy danh sách tài khoản với điều kiện tìm kiếm
    $listAccount = User::where('fullname', 'LIKE', "%{$search}%")
                        ->orWhere('fullname', 'LIKE', "%{$search}")
                        ->orWhere('fullname', 'LIKE', "{$search}%")
                        ->get(); 
                        // hoặc ->paginate(5);

    // Kiểm tra xem danh sách tài khoản có rỗng không
    if ($listAccount->isEmpty()) {

        return redirect()->route('account.management')->with(['message' => 'Không tìm thấy tài khoản nào']);

    }

    // Trả về danh sách tài khoản
    return redirect()->route('account.management')->with(['listAccount' => $listAccount]);
 
    }


    
    
    



}
