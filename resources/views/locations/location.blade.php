<x-layout>
    <x-slot name="title">
        相席食堂ロケ詳細
    </x-slot>
    <main>
        <div>
            <h2>旅人</h2>
            <p>{{$location->celebrity}}</p>
            <h2>日付</h2>
            <p>{{$location->date}}</p>
            <h2>ロケ地</h2>
            <p>{{$location->place}}</p>
            <h2>キーフレーズ</h2>
            <p>{{$location->key_phrase}}</p>
            <h2>ロケ内容</h2>
            <p class="overview">{{$location->overview}}</p>
        </div>
        <div>
            <h2>投稿内容</h2>
            @foreach($locationposts as $post)
                <p>{{$post->user->name}}</p>
                <p>{{$post->content}}</p>    
            @endforeach
        </div>
        <!--ロケいいね機能ここから-->
        <span class="nice">
            @if($nicelocation)
            <a href="{{ route('unnice',$location)}}">
                ♥
                <span class="badge">
                    {{ $location->nicelocations()->count() }}
                </span>
            </a>
            @else
            <a href="{{ route('nice',$location)}}">
                ♥
                <span class="badge">
                    {{ $location->nicelocations()->count() }}
                </span>
            </a>
            @endif
        </span>
        <!--ロケいいね機能ここまで-->
    </main>
</x-layout>