@extends('app')

@section('content')
    <div class="container-fluid">
        <a href="/posts/create" class="btn btn-default">Create Post</a>
    </div>
    <h1>Welcome to Posts wall!</h1>
    <div class="container-fluid">
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <article>
                    <h2>{!! $post->title !!}</h2>
                    <p>{!! $post->content !!}</p>
                    <p><small>Posted by <b> {!! $post->Author->name !!}</b> at <b>{!! $post->created_at !!}</b></small></p>
                </article>
            @endforeach
            {!! $posts->render() !!}
        @else
            <p>No Posts uploaded yet, {!! Html::link('/posts/create','Would like to upload one?') !!}</p>
        @endif
    </div>
@endsection