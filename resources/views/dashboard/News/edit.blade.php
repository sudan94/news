@extends('dashboard.News.createNews')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit News</h1>
    </div>
</div>


@section('editId', $new->id)
@section('editTitle',$new->newsTitle)
@section('editAuthor',$new->author)
@section('editCategory',$new->category)
@section('editBody',$new->newsBody)
@section('editPhoto',$new->filename)

@section('editMethod')

    {{method_field('PUT')}}
@endsection
