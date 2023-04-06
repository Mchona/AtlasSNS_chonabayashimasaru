<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  // テーブル名の指定（テーブル名がusersであれば不要）
  protected $table = 'users';

  // 可変項目
  protected $fillable = [
    'username',
    'mail',
    'password',
  ];

  // 隠蔽する項目
  protected $hidden = [
    'password',
    'remember_token',
  ];

  public function scopeSearch($query, $keyword)
  {
    return $query->where('username', 'like', "%{$keyword}%");
  }

  public function followings()
  {
    return $this->belongsToMany(User::class, 'follows', 'following_id', 'followed_id')->withTimestamps();
  }
}
