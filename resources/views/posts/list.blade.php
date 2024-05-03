<x-layout>
    <x-slot name="title">
        投稿リスト
    </x-slot>
        <h1>投稿一覧</h1>
        @foreach($posts as $post)
        <div class="row">
            <div class="col mb-3">
                <h4>旅人</h4>
                <p>{{$post->location->celebrity}}</p>
            {{ Form::button('編集', ['class' => 'btn btn-primary btn-x', 'onclick' => 'window.location.href="/posts/{{ $post->id }}/edit"']) }}
            {{ Form::open(['url' => '/posts/{{ $post->id }}' ,'method' => 'DELETE']) }}
            {{ Form::token() }}
            {{ Form::submit('削除',['class' => 'btn btn-danger btn-x', 'onclick' => 'deletePost({{ $post->id }})']) }}
            {{ Form::close() }}
                <script>
                    function deletePost(id) {
                        'use strict'
                        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                            document.getElementById(`form_${id}`).submit();
                        }
                    }
                </script>
            </div>
        </div>
        <div>
            <h5>投稿内容</h5>
            <p>{{ $post->content }}</p>
        </div>
        @endforeach
        <div class='paginate'>
            {{ $posts->links(pagination::bootstrap-4) }}
        </div>
</x-layout>