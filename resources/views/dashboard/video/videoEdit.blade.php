@extends('dashboard.master')
@section('editVideoTitle',$video->videoTitle)
@section('editVideoBody',$video->videoBody)
@section('editVideo',$video->filename)
@section('editPoster',$video->postername)
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Video</h1>
        </div>
    </div>
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box-body">
                    <form method="post" action="/videoList/{{$video->id}}/update" enctype="multipart/form-data"
                          class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label>video Title</label>
                        <div class="form-group">
                            <input type="text" id="videoTitle" name="videoTitle" class="form-control"
                                   value="@yield('editVideoTitle')">
                        </div>
                        <label>video Description</label>
                        <div class="form-group">
                           <textarea class="form-control" id="videoBody" rows="5" name="videoBody"
                                     value="">@yield('editVideoBody')</textarea>
                        </div>
                        <label>video</label>
                        <input type="file" name="video" value="@yield('editVideo')"><br>
                        <label>poster</label>
                        <input type="file" name="poster" value="@yield('editPoster')"><br>

                        <button type="submit" class="btn btn-primary">upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
