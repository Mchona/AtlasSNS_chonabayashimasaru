@extends('layouts.login')

@section('content')
<h2>機能を実装していきましょう。</h2>
<h2>フォローしているユーザーの投稿一覧</h2>
@foreach($posts as $post)
<p>名前：{{ $post->user ? $post->user->username : '' }}</p>
<p>投稿内容：{{ $post->post }}</p>
@endforeach
@endsection
