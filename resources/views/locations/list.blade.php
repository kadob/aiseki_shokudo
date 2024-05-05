<x-layout>
    <x-slot name="title">
        ロケリスト
    </x-slot>
        <h1>ロケリスト</h1>
        <div class="row">
            {{ Form::open(['url' => '{{ route ('search')}}' ,'method' => 'GET']) }}
            <div class="col-6">
                <input type="search" class="form-control" placeholder="出演者名" name="search" value="@if (isset($search)) {{ $search }} @endif">
            <div>
            <div class="col-2">
                {{ Form::submit('<i class="fa fa-search"></i>',['class'=>'btn btn-secondary']) }}
            <div>
            {{ Form::close() }}
        </div>
        @foreach ($locations as $location)
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
            </a>
        </div>
        @endforeach
        <div class='paginate'>
            {{ $locations->links() }}
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            {{ Form::button('人気ロケランキング', ['class' => 'btn btn-primary', 'onclick' => 'window.location.href='/locations/pop']) }}
            {{ Form::button('いいね一覧', ['class' => 'btn btn-primary', 'onclick' => 'window.location.href='/nice']) }}
        </div>
</x-layout>