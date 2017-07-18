@extends('dashboard.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> News According to Category</h1>
        </div>
    </div>
    <table class="table-hover table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Body</th>
        </tr>
        </thead>
        @foreach($allNews as $news)
            <tbody>
            <tr>
                <td><a href="/showNews/{{$news->id}}">{{$news->newsTitle}}</a></td>
                <td>{{$news->author}}</td>
                <td>{{$news->category}}</td>
                <td>{{$news->newsBody}}</td>
                <td><a href="/showNews/{{$news->id}}/edit">
                        <button type="button" class="btn btn-success" style="border: none">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </button>
                    </a>
                </td>
                <td>
                    <form method="POST" action="/showNews/{{$news->id}}/delete">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}

                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>

@endsection