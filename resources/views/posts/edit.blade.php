<x-layout>
    <x-slot name="title">
        編集
    </x-slot>
        <h1>編集</h1>
            {{ Form::open(['url' => '/posts/{{ $post->id }}' ,'method' => 'PUT'])}}
                {{ Form::token()}}
                {{ Form::select('post[location_id]', $locations->pluck('id', 'celebrity'), null, ['class' => 'form-select'])}}
                {{ Form::textarea('post[content]', {{ $post->content }}, ['class' => 'form-control','placeholder' => '〇〇〇のところが面白かった！']) }}
                <p class="content_error">{{ trans('error.', ['' => $errors->first('post.content')]) }}</p>
                {{ Form::submit('保存する',['class'=>'btn btn-primary btn-lg'])}}
            {{ Form::close() }}
        {{ Form::button('戻る', ['class' => 'btn btn-primary btn-lg', 'onclick' => 'window.location.href='/posts']) }}
</x-layout>