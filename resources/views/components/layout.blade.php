<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ABCテレビの相席食堂のマップアプリが誕生!相席食堂好きが相席食堂をより楽しめるアプリとなっています!ぜひのぞきに来てください！">
        <title>{{ $title }}</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                    @if (Route::has('login'))
                            @auth
                                <div class="col-md-4"><a href="/profile">プロフィール</a></div>
                                @else
                                    <div class="col-md-4"><a href="{{ route('login') }}">ログイン</a></div>
                                @if (Route::has('register'))
                                    <div class="col-md-4"><a href="{{ route('register') }}">アカウント登録</a></div>
                            @endif
                            @endauth
                    @endif
            </div>
        {{$slot}}
            <div class="row">
                <div class="col-md-4"><a href="/posts/create">投稿</a><div>
                <div class="col-md-4"><a href="/">マップ</a><div>
                <div class="col-md-4"><a href="/locations">ロケ検索</a><div>
            </div>
        </div>
    </body>
</html>