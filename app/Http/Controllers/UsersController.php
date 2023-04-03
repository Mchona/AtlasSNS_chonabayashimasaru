<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function profile()
    {
        return view('users.profile');
    }
    public function search()
    {
        return view('users.search');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required|min:2|max:12',
    //         'mail' => 'required|email|unique:users,email|min:5|max:40',
    //         'password' => 'required|alpha_num|min:8|max:20',
    //         'password-confirm' => 'required|same:password|alpha_num|min:8|max:20',
    //     ]);

    //     // バリデーションを通過した場合は、登録処理を実行する
    // }
}
