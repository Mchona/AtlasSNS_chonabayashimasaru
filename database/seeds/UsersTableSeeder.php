<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // ユーザー情報を10人分生成
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->username = 'user' . $i; // ユーザー名を"user0"から"user9"までの文字列に設定
            $user->mail = 'user' . $i . '@example.com'; // メールアドレスを"user0@example.com"から"user9@example.com"までの文字列に設定
            $user->password = bcrypt('password' . $i); // パスワードを"password0"から"password9"までの文字列に設定
            $user->bio = 'User ' . $i . 'の自己紹介'; // 自己紹介を設定
            $user->images = 'icon' . ($i % 5 + 1) . '.png'; // アイコン画像を"icon1.png"から"icon5.png"までのファイル名からランダムに設定
            $user->save();
        }
    }
}
