<x-layout>
    <x-slot name="title">
        相席食堂ロケリスト
    </x-slot>
    <main>
        <h1>ロケリスト</h1>
        <!--検索機能ここから-->
        <form method="GET" action="{{ route('searchLocation') }}" class="search">
            <input type="search" placeholder="出演者名" name="search" value="@if (isset($search)) {{ $search }} @endif"><!--$searchが存在するかしないかで条件分岐-->
                <div>
                    <button type="submit">検索</button>
                </div>
        </form>
            <!--LocationControllerのshowLocalistメソッドで受け取ったlocationsを回す-->
            @foreach ($locations as $location)
                <div class="location">
                    <a href="/locations/{{$location->id}}">
                        <div class="date">
                            <h4>日付</h4>
                            <p>{{$location->date}}</p>
                        </div>
                        <div class="celebrity">
                            <h4>旅人</h4>
                            <p>{{$location->celebrity}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        <!--ページネーション-->
        <div class='paginate'>
            {{ $locations->links() }}
        </div>
        <!--検索機能ここまで-->
        <!--人気ロケランキング画面に行く-->
        <h3 class="locamove"><a href = "/locations/locapop">人気ロケランキング　＞</a></h3>
        <h3 class="locamove"><a href="/nices">いいね一覧　＞</a></h3>
    </main>
</x-layout>