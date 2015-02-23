@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if(Auth::check())

                            <a href="{{url('user')}}" class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>
                            <a href="{{url('user/editing/' . $user->id )}}"
                               class="btn btn-primary fa fa-minus-circle fa-inverse"> Update</a>
                            <a href="{{url('user/deleting/' . $user->id )}}"
                               class="btn btn-primary fa fa-minus-circle fa-inverse"> Delete</a>
                        @endif
                        <h2 class="section-heading">Name: {{ $user->name }}</h2>

                        <h3 class="section-subheading text-muted">Email: {{ $user->email }}</h3>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <p class="text-info">Password: {{ $user->password }}</p>

                                <p class="text-info">Created at: {{ $user->created_at }}</p>

                                <p class="text-info">Updated at: {{ $user->updated_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop