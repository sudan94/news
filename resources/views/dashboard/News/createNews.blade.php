@extends('dashboard.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create News</h1>
        </div>
    </div>
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box-body">
                    <form method="post" action="/showNews/@yield('editId')" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @section('editMethod')
                        @show
                        <div class="form-group">
                            <label for="newsTitle">News Title:</label>
                            <input type="text" class="form-control" id="newsTitle" name="newsTitle"
                                   placeholder="Enter Title" value="@yield('editTitle')">
                        </div>
                        <div class="form-group">
                            <label for="author">Author Name:</label>
                            <input type="text" class="form-control" id="author" name="author"
                                   placeholder="Author Name" value="@yield('editAuthor')">
                        </div>
                        <div class="form-group">
                            <label for="category">Category:</label>
                            <select class="form-control" id="category" name="category"
                                    value="@yield('editCategory')">
                                @foreach($items as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="controls">
                            <div class="entry">
                                <label>Select image to upload:</label>
                                <input class="btn btn-primary" name="file[]" type="file"
                                       value="@yield('editPhoto')"><br/>
                                <div class="form-group">
                                    <label for="newsBody">News Content:</label>
                                    <textarea class="form-control ckeditor" rows="5" name="newsBody[]"
                                              value="">@yield('editBody')</textarea>
                                </div>

                                <span class="input-group-btn">
                            <button class="btn btn-success btn-add" type="button">
                            <span class="glyphicon glyphicon-plus"></span>
                </button>
                </span><br/><br/>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Publish</button>
                    </form>
                </div>
                <!-- /.box-body -->
                <!-- /.box -->
            </div>
        </div>
    </div>
@endsection
