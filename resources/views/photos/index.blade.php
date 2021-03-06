@extends('app')

@section('content')
   <div class="container-fluid">
       <a href="/photos/upload" class="btn btn-default">Upload photo</a>
   </div>
    <div class="container-fluid">

        @if(count($images))
            <table class="table table-responsive">
            <thead >
                <th class="text-uppercase text-info">Title</th>
                <th class="text-uppercase text-info">Image</th>
                <th class="text-uppercase text-info">Created at</th>
                <td class="text-uppercase text-danger">Operations</td>
            </thead>
            <tbody>
                @foreach($images as $image)
                    <tr>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <div class="portfolio-caption">
                                <td>
                                    <h4><a href="{{url('photos/' . $image->id)}}" class="portfolio-link"
                                           data-toggle="modal">
                                            {{ $image->title }}</a></h4>
                                </td>
                                <td>
                                    <p class="text-info"> {{ $image->image }}</p>
                                    <img src="{!! config('image.thumb_folder') . '/' . $image->image !!}">
                                </td>

                                <td>
                                    <p class="text-info">Created at: {{ $image->created_at }}</p>
                                </td>
                                <td>
                                    {!! Html::link('photos/' . $image->id . '/delete', 'Delete', array('class' => 'btn btn-danger'))  !!}
                                </td>
                            </div>
                        </div>
                    </tr>
                @endforeach
            </tbody>

        </table>
        @else
            <p>No images uploaded yet, {!! Html::link('/photos/upload','Would like to upload one?') !!}</p>
        @endif
    </div>
@endsection
@stop