@extends('dashboard.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">News List</h1>
        </div>
    </div>
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <div class="panel panel-default">
        <table class="table-hover table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Edit</th>
                @if(Auth::user()->role == 'admin')
                <th>Delete</th>
                @endif
                <th>
                </th>
                <th></th>
            </tr>
            </thead>
            @foreach($news as $new)
                <tbody>
                <tr>
                    <td><a href="/showNews/{{$new->id}}">{{$new->newsTitle}}</a></td>
                    <td>{{$new->author}}</td>
                    <td>{{$new->category}}</td>
                    <td><a href="showNews/{{$new->id.'/edit'}}">
                            <button type="button" class="btn btn-success">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                        </a>
                    </td>
                    @if(Auth::user()->role == 'admin')
                        <td>
                            <form method="POST" action="showNews/{{$new->id}}/delete">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                            </form>
                        </td>
                    @endif
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection


