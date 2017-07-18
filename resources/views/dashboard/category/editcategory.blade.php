@extends('dashboard.master')
@section('editCategory',$items->name)
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Edit Category </h1>
        </div>
    </div>
        <form class="form-inline" method="post" action="/newsCategory/{{$items->id}}/update">
            {{csrf_field()}}
            <div class="form-group">
                <label for="category">Edit Category:</label>
                <input type="text" class="form-control" name="category" value="@yield('editCategory')">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
@endsection
