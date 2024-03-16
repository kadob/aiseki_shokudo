<x-layout>
    <x-slot name="title">
        ロケリスト
    </x-slot>
    <main>
        <h1>ロケリスト</h1>
        <form method="GET" action="{{ route('search') }}" class="search">
            <input type="search" placeholder="出演者名" name="search" value="@if (isset($search)) {{ $search }} @endif">
            <div>
                <button type="submit">検索</button>
            </div>
        </form>
        @foreach ($locations as $location)
        <div class="location">
            <a href="/locations/{{$location->id}}">
                <div class="date">
                    <h4>日付</h4>
                    <p>{{ $location->date }}</p>
                </div>
                <div class="celebrity">
                    <h4>旅人</h4>
                    <p>{{ $location->celebrity }}</p>
                </div>
            </a>
        </div>
        @endforeach
        <div class='paginate'>
            {{ $locations->links() }}
        </div>
        <h3 class="locationMove"><a href="/locations/pop">人気ロケランキング　＞</a></h3>
        <h3 class="locationMove"><a href="/nice">いいね一覧　＞</a></h3>
    </main>
</x-layout>