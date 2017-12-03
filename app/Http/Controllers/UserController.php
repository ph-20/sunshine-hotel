<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CheckEditUserRequest;
use App\Http\Requests\CheckPasswordUserRequest;
use App\User;
use Toastr;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home()
    {
        return redirect()->route('users.index');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function changepassword($id)
    {
        $user = User::find($id);
        return view('admin.users.changepassword', compact('user'));
    }

    public function updatepassword(User $user, CheckPasswordUserRequest $request)
    {
        $data = $request->all();
        $data = Input::all();
        $user->update(['password' => bcrypt($data['password'])]);
        Toastr::success('Update Thành Công');
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(User $user, CheckEditUserRequest $request)
    {
        $data = $request->all();
        $data = Input::all();
        $user->update($data);
        Toastr::success('Update Thành Công');
        return redirect()->route('users.index');
    }

    public function delete(User $user)
    {
        $user->delete();
        Toastr::info('Delete Thanh Cong');
        return redirect()->route('users.index');
    }

    // Admin login
    public function getAdminLogin()
    {
        return view('admin.users.login');
    }

    public function postAdminLogin(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required',
                'password' => 'required|min:3|max:40'
            ],
            [
                'email.required' => 'Bạn chưa nhập email',
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu phải có độ dài tối thiểu 3 ký tự',
                'password.max' => 'Mật khẩu có độ dài tối đa 50 ký tự'
            ]
        );
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('rooms.index');
        } else {
            return redirect()->route('adminlogin')->with('message', 'Sai email hoặc mật khẩu không đúng');
        }
    }

    public function getAdminLogout()
    {
        Auth::logout();
        return redirect()->route('adminlogin');
    }
}
