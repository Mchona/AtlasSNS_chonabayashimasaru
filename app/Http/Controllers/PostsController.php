<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{

    public function index()
    {
        $followingIds = Auth::user()->following()->pluck('users.id')->toArray();
        $posts = Post::whereIn('user_id', $followingIds)->orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
