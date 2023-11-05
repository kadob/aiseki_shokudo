<x-layout>
    <x-slot name="title">
        マイいいねリスト
    </x-slot>
    <main>
        <h1>いいねスポット</h1>
            @foreach($nicemaps as $nicemap)
                <div class="map">
                    <a href="/maps/{{$nicemap->map->id}}">
                        <div class="mapspot">
                            <h4>ロケ地</h4>
                            <p>{{$nicemap->map->store_name}}</p>
                        </div>
                        <div class="celebrity">
                            <h4>旅人</h4>
                            <p>{{$nicemap->map->location->celebrity}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        <h1>いいねロケ</h1>
            @foreach($nicelocations as $nicelocation)
                <div class="location">
                    <a href="/locations/{{$nicelocation->location->id}}">
                        <div class="date">
                            <h4>日付</h4>
                            <p>{{$nicelocation->location->date}}</p>
                        </div>
                        <div class="celebrity">
                            <h4>旅人</h4>
                            <p>{{$nicelocation->location->celebrity}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        <h3 class="locamove"><a href="/locations">ロケリスト　＞</a></h3>
    </main>
</x-layout>