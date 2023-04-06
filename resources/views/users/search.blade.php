@extends('layouts.login')

@section('content')

<div>
  <form action="{{ route('search') }}" method="GET">
    <input type="text" name="query" placeholder="ユーザー名">
    <button type="submit">検索</button>
  </form>
  @if(isset($query))
  <p>検索ワード: {{ $query }}</p>
  @endif
</div>

<table>
  @foreach ($users as $user)
  @if ($user->id !== Auth::user()->id)
  <tr>
    <td>{{ $user->username }}</td>
    <td>
      @if (Auth::user()->isFollowing($user->id))
      <form action="{{ route('unfollow', $user->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit">フォロー解除</button>
      </form>
      @else
      <form action="{{ route('follow', $user->id) }}" method="POST">
        {{ csrf_field() }}
        <button type="submit">フォローする</button>
      </form>
      @endif
    </td>
  </tr>
  @endif
  @endforeach
</table>



@endsection
