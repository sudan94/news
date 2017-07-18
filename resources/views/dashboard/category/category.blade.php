@extends('dashboard.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">News Category</h1>
        </div>
    </div>
    <div class="container">
        @if(Session::has('message'))
            <p class="alert {{Session::get('alert-class','alert-info')}}">{{Session::get('message')}}</p>
        @endif
        <form class="form-inline" method="post" action="/newsCategory">
            {{csrf_field()}}
            @section('editCat')
            @show
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" class="form-control" name="category">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div><br/>

    <div class="col-lg-12">
        <table class="table-hover table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
            </tr>
            </thead>
            @foreach($items as $item)
                <tbody>
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td><a href="newsCategory/{{$item->id.'/edit'}}">
                            <button type="button" class="btn btn-success" style="border: none">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                        </a>
                    </td>
                    <td>
                        <form method="POST" action="newsCategory/{{$item->id}}/delete">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}

                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
@endsection
