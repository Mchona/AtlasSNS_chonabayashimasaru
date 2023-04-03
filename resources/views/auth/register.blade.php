@extends('layouts.logout')

@section('content')

{!! Form::open() !!}

<h2>新規ユーザー登録</h2>

{{ Form::label('ユーザー名') }}
{{ Form::text('username',null,['class' => 'input', 'required' => 'required', 'minlength' => 2, 'maxlength' => 12])}}

{{ Form::label('メールアドレス') }}
{{ Form::text('mail',null,['class' => 'input', 'required' => 'required', 'minlength' => 5, 'maxlength' => 40]) }}

{{ Form::label('パスワード') }}
{{ Form::password('password',null,['class' => 'input', 'required' => 'required']) }}

{{ Form::label('パスワード確認') }}
{{ Form::password('password-confirm',null,['class' => 'input', 'required' => 'required']) }}

{{ Form::submit('登録') }}

<p><a href="/login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


@endsection
