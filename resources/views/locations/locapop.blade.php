<x-layout>
    <x-slot name="title">
        相席食堂ロケ人気ランキング
    </x-slot>
    <main>
        <h1>人気ロケランキング</h1>
            @foreach($locations as $location)
                <div class="location">
                    <a href="/locations/{{$location->id}}">
                        <div class="rank">
                            <h3>{{ $location->rank }}位</h3>
                        </div>
                        <div class="date">
                            <h4>日付</h4>
                            <p>{{ $location->date }}</p>
                        </div>
                        <div class="celebrity">
                            <h4>旅人</h4>
                            <p>{{ $location->celebrity}}</p>
                        </div>
                        <div class="nicecounts">
                            <h4>いいね数</h4>
                            <p>{{ $location->nicelocations_count }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        <div class='paginate'>
            {{ $locations->links() }}
        </div>
        <h3 class="locamove"><a href="/locations">ロケリスト　＞</a></h3>
    </main>
</x-layout>