<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Follow;

class FollowsController extends Controller
{
    //
    public function followList()
    {
        return view('follows.followList');
    }
    public function followerList()
    {
        return view('follows.followerList');
    }

    public function follow(User $user)
    {
        $follow = new Follow;
        $follow->following_id = auth()->user()->id;
        $follow->followed_id = $user->id;
        $follow->save();

        return redirect()->back();
    }

    public function unfollow(User $user)
    {
        $follow = Follow::where('following_id', auth()->user()->id)->where('followed_id', $user->id)->first();
        if ($follow) {
            $follow->delete();
        }
        return redirect()->back();
    }
}
