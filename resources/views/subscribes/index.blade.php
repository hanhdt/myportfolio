@extends('app')

@section('content')
    <div class="container-fluid">
        @if(count($subscribes) > 0)
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <th>Email</th>
                    <th>Created at</th>
                    </thead>
                    <tbody>
                    @foreach($subscribes as $subscribe)
                        <tr>
                            <div class="user">
                                <td>
                                    <a href="{{url('subscribes/show-single/' . $subscribe->id)}}">
                                        <strong> {{{ $subscribe->email }}} </strong>
                                    </a>
                                </td>
                                <td>
                                    {{{ $subscribe->created_at }}}
                                </td>
                            </div>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <h3> There are no subscribers!</h3>
        @endif
    </div>
@stop