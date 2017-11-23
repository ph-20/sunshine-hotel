<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CheckEditUserRequest;
use App\Http\Requests\CheckPasswordUserRequest;
use App\User;
use Toastr;

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
        $user->update($data);
        Toastr::success('Update Thanh Cong');
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
        Toastr::success('Update Thanh Cong');
        return redirect()->route('users.index');
    }

    public function delete(User $user)
    {
        $user->delete();
        Toastr::info('Delete Thanh Cong');
        return redirect()->route('users.index');
    }
}
