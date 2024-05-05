<x-layout>
    <x-slot name="title">
        相席食堂ロケ人気ランキング
    </x-slot>
        <h1>人気ロケランキング</h1>
        @foreach($locations as $location)
            <div class="rank">
                <h3>{{ $location->rank }}位</h3>
            </div>
            <div class="row">
                <a href="/locations/{{$location->id}}">
                    <div class="col"><img src="{{ asset($location->image_path) }}" alt="相席食堂ロケ写真" class="img-fluid rounded"></div>
                    <div class="date">
                        <h4>日付</h4>
                        <p>{{ $location->date }}</p>
                    </div>
                    <div class="celebrity">
                        <h4>旅人</h4>
                        <p>{{ $location->celebrity }}</p>
                    </div>
                    <div class="niceCounts">
                        <h4>いいね数</h4>
                        <p>{{ $location->niceLocations_count }}</p>
                    </div>
                </a>
            </div>
        @endforeach
        <div class='paginate'>
            {{ $locations->links() }}
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            {{ Form::button('ロケリスト', ['class' => 'btn btn-primary', 'onclick' => 'window.location.href='/locations']) }}
        </div>
</x-layout>