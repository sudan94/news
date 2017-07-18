<div class="main-nav">
    <nav class="m-menu m-menu3">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="m-logo " href="#">Brand</a>-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="/index">गृहपृष्ठ<span class="sr-only">(current)</span></a></li>
                @foreach($categories->take(12) as $category)
                    <li><a href="/category/{{$category->id}}">{{$category->name}}</a> </li>
                @endforeach
                {{--<li><a href="/politics">राजनीति </a></li>
                <li><a href="/social">सम-समयकि</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">विश्‍लेषण<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>

                <li><a href="#">सुशासन </a></li>
                <li><a href="#">प्रवास</a></li>
                <li><a href="/economics">अर्थ</a></li>
                <li><a href="/entertainment">मनोरञ्जन</a></li>
                <li><a href="/sports">खेलकुद </a></li>
                <li><a href="/video">भिडियो </a></li>
                <li><a href="#">छापामा </a></li>
                <li><a href="/special">बिषेस</a></li>--}}
            </ul>


        </div><!-- /.navbar-collapse -->
    </nav>
</div>