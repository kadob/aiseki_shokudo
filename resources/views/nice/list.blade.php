<x-layout>
    <x-slot name="title">
        マイいいねリスト
    </x-slot>
        <h1>いいねスポット</h1>
        <div class="row">
            @foreach($niceMaps as $niceMap)
            <div class="col-12 mb-3">
                <a href="/maps/{{$niceMap->map->id}}">
                    <h4>ロケ地</h4>
                    <p>{{$niceMap->map->store_name}}</p>
                    <h4>旅人</h4>
                    <p>{{$niceMap->map->location->celebrity}}</p>
                </a>
            </div>
            @endforeach
        </div>
        <h1>いいねロケ</h1>
        <div class="row">
            @foreach($niceLocations as $niceLocation)
            <div class="col-12 mb-3">
                <a href="/locations/{{ $niceLocation->location->id }}">
                    <h4>日付</h4>
                    <p>{{ $niceLocation->location->date }}</p>
                    <h4>旅人</h4>
                    <p>{{ $niceLocation->location->celebrity }}</p>
                </a>
            </div>
            @endforeach
        </div>
        {{ Form::button('ロケリスト', ['class' => 'btn btn-primary btn-lg', 'onclick' => 'window.location.href='/locations']) }}
</x-layout>
