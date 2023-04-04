<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    // フォローしているユーザー
    public function following()
    {
        return $this->belongsTo(User::class, 'following_id');
    }

    // フォローされているユーザー
    public function followed()
    {
        return $this->belongsTo(User::class, 'followed_id');
    }
}
