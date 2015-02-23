@extends('app')

@section('content')
    @if(count($users) > 0)
        <div class="table-responsive">
            <table class="table">
                <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Created at</th>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <div class="user">
                            <td>
                                <a href="{{url('user/show-single/' . $user->id)}}">
                                    <strong> {{{$user->name}}} </strong>
                                </a>
                            </td>
                            <td>
                                {{{ $user->email }}}
                            </td>
                            <td>
                                {{{ $user->created_at }}}
                            </td>
                        </div>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <h3> There are no users!</h3>
    @endif
@stop