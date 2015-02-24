@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if(Auth::check())

                            <a href="{{url('subscribes')}}" class="btn btn-primary fa fa-minus-circle fa-inverse">
                                Back</a>
                            <a href="{{url('subscribes/editing/' . $subscribe->id )}}"
                               class="btn btn-primary fa fa-minus-circle fa-inverse"> Update</a>
                            <a href="{{url('subscribes/deleting/' . $subscribe->id )}}"
                               class="btn btn-primary fa fa-minus-circle fa-inverse"> Delete</a>
                        @endif
                        <h2 class="section-heading">Email: {{ $subscribe->email }}</h2>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <p class="text-info">Created at: {{ $subscribe->created_at }}</p>

                                <p class="text-info">Updated at: {{ $subscribe->updated_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop