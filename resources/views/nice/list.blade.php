<x-layout>
    <x-slot name="title">
        マイいいねリスト
    </x-slot>
    <main>
        <h1>いいねスポット</h1>
        @foreach($niceMaps as $niceMap)
        <div class="map">
            <a href="/maps/{{$niceMap->map->id}}">
                <div class="mapSpot">
                    <h4>ロケ地</h4>
                    <p>{{$niceMap->map->store_name}}</p>
                </div>
                <div class="celebrity">
                    <h4>旅人</h4>
                    <p>{{$niceMap->map->location->celebrity}}</p>
                </div>
            </a>
        </div>
        @endforeach
        <h1>いいねロケ</h1>
        @foreach($niceLocations as $niceLocation)
        <div class="location">
            <a href="/locations/{{ $niceLocation->location->id }}">
                <div class="date">
                    <h4>日付</h4>
                    <p>{{ $niceLocation->location->date }}</p>
                </div>
                <div class="celebrity">
                    <h4>旅人</h4>
                    <p>{{ $niceLocation->location->celebrity }}</p>
                </div>
            </a>
        </div>
        @endforeach
        <h3 class="locationMove"><a href="/locations">ロケリスト　＞</a></h3>
    </main>
</x-layout>