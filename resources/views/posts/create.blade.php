<x-layout>
    <x-slot name="title">
        投稿
    </x-slot>
            <div class=col-md-4>投稿</div>
            {{ Form::open(['url' => '/posts'])}}
            {{ Form::token()}}
            {{ Form::select('post[location_id]', $locations->pluck('id', 'celebrity'), null, ['class' => 'form-select'])}}
            {{ Form::textarea('post[content]', old('post.content'), ['class' => 'form-control','placeholder' => '〇〇〇のところが面白かった！']) }}
            <p class="content_error">{{ trans('error.', ['' => $errors->first('post.content')]) }}</p>
            {{ Form::submit('投稿する',['class'=>'btn btn-primary btn-lg'])}}
            {{ Form::close() }}
        {{ Form::button('自分の投稿一覧', ['class' => 'btn btn-primary btn-lg', 'onclick' => 'window.location.href='/posts']) }}
</x-layout>
