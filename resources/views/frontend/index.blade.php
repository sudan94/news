@extends('frontend.master')
@section('content')
    <div class="container">
        <div class="row">
            @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
        </div>
    </div>
    @foreach($news as $new)
        <div class="news-block">
            <div class="row">
                {{--THis is for NEws ONly--}}
                @if($new->newsCategory_id != 10)
                    <h1>{{$new->newsTitle}}</h1>
                    </br>
                    @foreach(explode('|', $new->filename) as $key => $info)
                        @if($key ==0)
                            <div class="img-container img-responsive">
                                <img src="/uploads/{{$info}}" width="85%" height="100%">
                            </div>
                        @endif
                    @endforeach
                    <div class="news-story">
                        <p>{{$new->author}}</p>
                        <div class="text-concat">
                            @foreach(explode('|', $new->newsBody) as $key => $info)
                                @if($key ==0)
                                {!! $info !!}
                                @endif
                            @endforeach
                        </div>
                        <a href="index/{{$new->id}}" class="b-none">Read More</a>
                        @endif

                        {{--this is for video--}}
                        @if($new->newsCategory_id == 10)
                            <h1>{{$new->newsTitle}}</h1>
                            </br>
                            <div class="wide">
                                <div class="content">
                                    <video preload="none" poster="/uploads/poster/{{$new->filename}}" controls="true">
                                        <source src="/uploads/video/{{$new->videoName}}"/>
                                    </video>
                                </div>
                            </div>
                    </div>
                    <div class="news-story">
                        <p>{{$new->author}}</p>
                        <div class="text-concat">
                            @foreach(explode('|',$new->newsBody) as $key => $info)
                                @if($key ==0)
                                    {!!$info!!}
                                @endif
                            @endforeach
                        </div>
                        <a href="index/{{$new->id}}" class="b-none">Read More</a>
                        @endif
                    </div>
            </div>
        </div>
    @endforeach
@endsection

@section('footerContent')

        <div class="container">
            <div class="row">
                @foreach($news->take(1) as $new)
                <div class="col-sm-4 col-md-4">
                    <div class="img-container img-responsive">
                        <img src="/uploads/{{$new->filename}}" width="85%" height="100%"/>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="hightlights">
                        <div class="news-story">
                            <h3>{{$new->newsTitle}}</h3>
                            <div class="text-concat2">
                                {!! $new->newsBody !!}
                            </div>
                            <a href="index/{{$new->id}}" class="b-none">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-sm-4 col-md-4">
                        <div class="table1">
                            <table class="table table-striped">

                                <thead>
                                <tr>
                                    <th>Treading News</th>
                                </tr>
                                </thead>
                                <tbody style="height:300px;">
                                @foreach($news as $new)
                                    <tr>
                                        <td><a href="individule/{{$new->id}}"> {{$new->newsTitle}}</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--
@section('newsfeed')
    <div class="news-main-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="table2">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ताजा खबर</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $new)
                                <tr>
                                    <td><a href="/index/{{$new->id}}">{{$new->newsTitle}}</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- weather widget start --><a target="_blank"
                                                    href="http://www.booked.net/weather/kathmandu-5536">
                        <div class="img1">
                            <img src="https://w.bookcdn.com/weather/picture/4_5536_1_1_005df2_328_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=w209&anc_id=9077"
                                 alt="booked.net"/>
                        </div>
                    </a><!-- weather widget end -->
                </div>
                <div class="col-md-4">
                    This is Facebook Widget
                    <div class="fb-page"
                         data-href="https://www.facebook.com/Graceful-Moments-Photography-308679806185966/"
                         data-tabs="timeline" data-small-header="false" data-adapt-container-width="true"
                         data-hide-cover="false"
                         data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/Graceful-Moments-Photography-308679806185966/"
                                    class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/Graceful-Moments-Photography-308679806185966/">Graceful
                                Moments
                                Photography</a></blockquote>
                    </div>
                </div>
            </div>
        </div>
        <div class="temperature">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <label>सधक्ष्यता </label>
                        <form class="form-horizontal" action="/subscription" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password"
                                           placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <iframe src="http://www.ashesh.com.np/forex/widget2.php?api=411162h351" frameborder="0"
                                scrolling="no"
                                marginwidth="0" marginheight="0"
                                style="border:none; overflow:hidden; width:100%; height:383px; border-radius:5px;"
                                allowtransparency="true">
                        </iframe>
                        <br>
                        <span style="color:gray; font-size:8px; text-align:left">© <a
                                    href="http://www.ashesh.com.np/forex/"
                                    title="Nepal Exchange Rates"
                                    target="_top"
                                    style="text-decoration:none; color:gray;">
            Nepal Exchange Rates</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
--}}


