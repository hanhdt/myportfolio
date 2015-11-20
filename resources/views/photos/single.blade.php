@extends('app')

@section('content')
    <div class="container-fluid left">
        <h2>Title: {!! $image->title  !!}</h2>
        {!! Html::image(config('image.thumb_folder') . '/' . $image->image) !!}
        <p>Direct Image URL</p>
        {!! Form::url('real-image', url(config('image.upload_folder') . '/' . $image->image), array( 'onclick' => 'this.select()','style' => 'width: 100%')) !!}
        <p>Thumbnail Forum BBCode</p>
        {!! Form::text('thumbnail-bbcode', "[url = " . url('photos/' . $image->id) . "] [img] " .
        url( config('image.thumb_folder') . '/' . $image->image) . "[/img] [/url]",
        array( 'onclick' => 'this.select()', 'style' => 'width: 100%')) !!}
        <p>Thumbnail HTML Code</p>
        {!! Form::text('thumbnail-html-code', Html::entities(Html::link(url('photos/' . $image->id), Html::image(config('image.thumb_folder') . '/' . $image->image))), array('style' => 'width: 100%')) !!}
    </div>
@endsection
@stop