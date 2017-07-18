@extends('dashboard.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Single News</h1>
        </div>
    </div>
    <div class="container">
        <h2>News</h2>
        <div class="panel panel-default">
            <table class="table-hover table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Body</th>
                </tr>
                </thead>
                    <tbody>
                    <tr>
                        <td>{{$news->newsTitle}}</td>
                        <td>{{$news->author}}</td>
                        <td>{{$news->category}}</td>
                        <td>{{$news->newsBody}}</td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>
@endsection