<x-layout>
    <x-slot name="title">
        ロケ詳細
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
            @foreach($posts as $post)
                <p>{{$post->user->name}}</p>
                <p>{{$post->content}}</p>
            @endforeach
        </div>
        <span class="nice">
            @if($niceLocation)
            <a href="{{ route('unnice',$location)}}">
                ♥
                <span class="badge">
                    {{ $location->niceLocations()->count() }}
                </span>
            </a>
            @else
            <a href="{{ route('nice',$location)}}">
                ♥
                <span class="badge">
                    {{ $location->niceLocations()->count() }}
                </span>
            </a>
            @endif
        </span>
    </main>
</x-layout>