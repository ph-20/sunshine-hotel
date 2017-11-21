<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;

class ManagerUserController extends Controller
{
    public function home()
    {
        return redirect('admin/manageruser/index');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.manageruser.index', compact('users'));
    }

    public function edit(User $user)
    {
        $user = User::get()->first();
        return view('admin.manageruser.edit', compact('user'));
    }

    public function udpate(User $user)
    {
        $data = Input::all();
        $user->update($data);
            dd($user);
        return redirect('admin/manager');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/manageruser/index');
    }
}
