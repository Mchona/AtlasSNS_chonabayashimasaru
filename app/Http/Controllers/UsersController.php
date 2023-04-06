<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function profile()
    {
        return view('users.profile');
    }


    // public function search(Request $request)
    // {
    //     // $query = $request->input('query');
    //     // // ユーザー名であいまい検索を実行
    //     // $users = User::where('username', 'like', '%' . $query . '%')->get();
    //     // return view('users.search', compact('users'));

    //     $query = $request->input('query');
    //     $users = User::where('username', 'LIKE', "%{$query}%")->get();

    //     return view('search', compact('users', 'query'));
    // }
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
}
