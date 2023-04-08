<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <!--IEブラウザ対策-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="ページの内容を表す文章" />
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <!--スマホ,タブレット対応-->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!--サイトのアイコン指定-->
    <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
    <!--iphoneのアプリアイコン指定-->
    <link rel="apple-touch-icon-precomposed" href="画像のURL" />
    <!--OGPタグ/twitterカード-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $('#menu-toggle').on('click', function() {
                $('#confirm').hide();
                $('#menu-list').slideToggle();
            });
        });
    </script>

</head>

<body>
    <header>
        <div id="head">
            <h1><a href="/top"><img src="{{ asset('images/atlas.png') }}" alt="アトラス"></a></h1>
            <div id="">
                <div id="">
                    <p>{{ session('username') }}さん</p><img src="{{ asset('images/icon1.png') }}"></p>
                    <div id="menu-button">
                        <button id="menu-toggle">Menu</button>
                        <ul id="menu-list">
                            <li class="menu-link"><a href="/top">ホーム</a></li>
                            <li class="menu-link"><a href="/profile">プロフィール</a></li>
                            <li class="menu-link"><a href="/logout">ログアウト</a></li>
                        </ul>
                    </div>
                </div>
    </header>
    <div id="row">
        <div id="container">
            @yield('content')
        </div>
        @include('sidebar')
        <!-- <div id="side-bar">
            <div id="confirm">
                <p>{{ session('username') }}さんの</p>
                <div>
                    <p>フォロー数</p>
                    @if(Request::path() === 'top')
                    <p>{{ $followerCount }}名</p>
                    @else
                    <p>0名</p>
                    @endif
                </div>
                <p class="btn"><a href="">フォローリスト</a></p>
                <div>
                    <p>フォロワー数</p>
                    <p>〇〇名</p>
                </div>
                <p class="btn"><a href="">フォロワーリスト</a></p>
            </div>
            <p class="btn"><a href="{{ route('search') }}">ユーザー検索</a></p>
        </div> -->
    </div>
    <footer>
    </footer>
    <script src="JavaScriptファイルのURL"></script>
    <script src="JavaScriptファイルのURL"></script>
</body>

</html>
