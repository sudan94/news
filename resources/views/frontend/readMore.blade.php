@extends('frontend.master')
@section('content')
    @if($news->newsCategory_id !=9)
        <div class="news-block">
            <div class="row">
                <h1>{{$news->newsTitle}}</h1></br>
                <?php $new = explode('|', $news->newsBody) ?>
                <?php $images = (explode('|', $news->filename))?>
                @for($i=0;$i<count(explode('|', $news->filename));$i++)
                    <div class="img-container">
                        <img src="/uploads/{{$images[$i]}}">
                    </div>
                    <div class="news-story">
                        {!!$new[$i]!!}
                    </div>
                @endfor
            </div>
        </div>
    @endif
    @if($news->newsCategory_id == 9)
        <div class="news-block">
            <div class="row">
                <h1>{{$news->newsTitle}}</h1>
                <div class="wide">
                    <div class="content">
                        <video controls="controls" preload="none" id="myvideo"
                               poster="/uploads/poster/{{$news->filename}}">
                            <source src="/uploads/video/{{$news->videoName}}">
                        </video>
                    </div>
                </div>
                <div class="news-story">
                    <p>{{$news->author}}</p>
                    <br/><br/>
                    <p>{!!$news->newsBody!!}</p>
                </div>
            </div>
        </div>
    @endif
@endsection