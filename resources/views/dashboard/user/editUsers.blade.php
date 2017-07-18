@extends('dashboard.master')
@section('editCategory',$users->name)
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Edit User</h1>
        </div>
    </div>
    <form class="form-inline" method="post" action="/users/{{$users->id}}/update">
        {{csrf_field()}}

            <label>Edit Users Role:</label>
        <br/>
        <br/>
        <h3>{{$users->name}}</h3>
        <div class="radio">
            <label>
                <input type="radio" name="role" id="role"  value="admin" checked>
                Admin
            </label>
        </div>
        <br/>
        <div class="radio">
            <label>
                <input type="radio" name="role" id="role" value="user">
                User
            </label>
        </div>
        <br/>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
