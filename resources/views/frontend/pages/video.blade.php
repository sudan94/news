@extends('frontend.master')

@section('content')
    <!-- START HTML5 VIDEO -->
    @foreach($news as $video)
        <div class="news-block">
            <div class="row">
                <h1>{{$video->newsTitle}}</h1>
                <div class="wide">
                    <div class="content">
                        <video preload="none" poster="/uploads/poster/{{$video->filename}}" controls="true">
                            <source src="/uploads/video/{{$video->videoName}}"/>
                        </video>
                    </div>
                </div>
                <div class="news-story">
                    {{$video->newsBody}}
                </div>
            </div>
        </div>

    @endforeach
    <!-- END HTML5 VIDEO -->


@endsection
