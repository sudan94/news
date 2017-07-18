@extends('dashboard.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User List</h1>
        </div>
    </div>
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <a href="{{ url('/register') }}"> <button type="button" class="btn btn-primary">Add Users</button></a>
    </br>
    </br>
        <div class="panel panel-default">
            <table class="table-hover table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="users/{{$user->id.'/edit'}}">
                                <button type="button" class="btn btn-success" style="border: none">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="users/{{$user->id}}/delete">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"
                                                                                aria-hidden="true"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@endsection