<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Follow;
use Illuminate\Support\Facades\Auth;



class UsersController extends Controller
{
    public function profile()
    {
        return view('users.profile');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('username', 'LIKE', "%{$query}%")->get();
        return view('users.search', compact('users', 'query'));
    }


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::get();
        return view('users.search', compact('users'));
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'follows', 'following_id', 'followed_id');
    }


    // if (request()->path() === 'top') {
    //     $followerCount = Follow::count('followed_id');
    //     return view('layouts.login', ['followerCount' => $followerCount]);
    // } else {
    //     return view('layouts.login');
    // }

    // public function showProfile()
    // {
    //     $user = Auth::user(); // ログインしているユーザーの情報を取得
    //     $followerCount = Follow::where('following_id', $user->id)->count(); // following_idがログインしているユーザーのidと一致するレコードをカウント
    //     return view('layouts.login', ['followerCount' => $followerCount]);
    // }
}
