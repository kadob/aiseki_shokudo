<x-layout>
    <x-slot name="title">
        ちょっと待てぃ！スポット
    </x-slot>
    <main>
        <div>
            <h2>ちょっと待てぃ！ロケ地</h2>
            <p>{{ $map->store_name }}</p>
            <h2>旅人</h2>
            <p>{{ $map->location->celebrity }}</p>
            <h2>日付</h2>
            <p>{{ $map->location->date }}</p>
            <h2>住所</h2>
            <p>{{ $map->address }}</p>
            
            <h2>グルメ</h2>
            <p>{{ $map->gourmet }}</p>
            <h2>キーワード</h2>
            <p>{{ $map->keyword }}</p>
        </div>
        <span class="nice">
            @if($niceMap)
            <a href="{{ route('unniceMap',$map) }}">
                ♥
                <span class="badge">
                    {{ $map->niceMaps()->count() }}
                </span>
            </a>
            @else
            <a href="{{ route('niceMap',$map)}}">
                ♥
                <span class="badge">
                    {{ $map->niceMaps()->count() }}
                </span>
            </a>
            @endif
        </span>
        <h3 class="locationMove"><a href="/nice">いいね一覧　＞</a></h3>
    </main>
</x-layout>