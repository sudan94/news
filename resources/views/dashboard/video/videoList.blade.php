@extends('dashboard.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Video List</h1>
        </div>
    </div>
    <div class="panel panel-default">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <table class="table-hover table">
            <thead>
            <tr>
                <th>Video Title</th>
                <th>Video Description</th>
                <th>File Name</th>
                <th>Poster Name</th>
            </tr>
            </thead>
            @foreach($videos as $video)
                <tbody>
                <tr>
                    <td><a href="/videoList/{{$video->id}}">{{$video->videoTitle}}</a></td>
                    <td>{{$video->videoBody}}</td>
                    <td>{{$video->filename}}</td>
                    <td class="text-concat text">{{$video->postername}}</td>
                    <td><a href="videoList/{{$video->id.'/edit'}}">
                            <button type="button" class="btn btn-success">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                        </a>
                    </td>
                    @if(Auth::user()->role == 'admin')
                        <td>
                            <form method="POST" action="videoList/{{$video->id}}/delete">
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
    </div>
@endsection
