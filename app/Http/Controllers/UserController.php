<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;

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

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = Input::all();
        $user->update($data);
        return redirect()->route('users.index');
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
