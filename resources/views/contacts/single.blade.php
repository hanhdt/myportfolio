@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('contacts')}}" class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>
                        <a href="{{url('contacts/' . $contact->id . '/edit')}}"
                           class="btn btn-primary fa fa-minus-circle fa-inverse"> Update</a>
                        <a href="{{url('contacts/' . $contact->id . '/delete')}}"
                           class="btn btn-primary fa fa-minus-circle fa-inverse"> Delete</a>

                        <h2 class="section-heading">Name: {{ $contact->name }}</h2>

                        <h3 class="section-subheading text-muted">Email: {{ $contact->email }}</h3>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <p class="text-info">Message: {{ $contact->message }}</p>

                                <p class="text-info">Phone: {{ $contact->phone }}</p>

                                <p class="text-info">Created at: {{ $contact->created_at }}</p>

                                <p class="text-info">Updated at: {{ $contact->updated_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection