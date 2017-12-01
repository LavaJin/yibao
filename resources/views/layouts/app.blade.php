<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="{{ isset($setting['keywords']) ? $setting['keywords'] : config('app.name') }}" />
    <meta name="description" content="{{ isset($setting['description']) ? $setting['description'] : config('app.name') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($setting['title']) ? $setting['title'] : config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('pc/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pc/css/animate.min.css') }}">
    <style>
        .carousel-control {
            display: none;
            width:6%;
        }
        .carousel-indicators .active {
            width: 12px;
            height: 12px;
            margin: 0;
            background-color: red;
        }
        .navbar {
            margin-bottom: 0px;
        }
        .col-lg-4 {
            margin-top: 10px;
        }
        #content {
            margin-top: 20px;
        }
        .carousel-indicators {
            bottom: 0px;
        }
        .Mycol {
            border-left: 1px dashed #ccc;
        }
        @media screen and (max-width: 768px) {
            .Mycol{
                border-left:none;
                border-top: : 1px dashed #ccc;
            }
        }
        #navbar-nav-ul>li>a{
          /*color: #000;*/
          font-size: 18px;
        }
    </style>
    @yield('css')
</head>
<body>
<header>
    <nav class="navbar navbar-default" style="background: #fff;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="navbar-brand" src="{{ asset('pc/image/logos.png') }}" alt="">
                <a class="navbar-brand  visible-lg-block visible-md-block " href="/">江苏宜宝设备制造有限公司</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="navbar-nav-ul">
                    <li><a class="animated" href="/">首页</a></li>
                    {{--<li><a class="animated" href="/about">关于我们</a></li>--}}
                    @foreach($categories as $category)
                        <li><a class="animated" href="/category/{{ $category->id }}">{{ $category->name }}</a></li>
                    @endforeach
                    {{--<li><a class="animated" href="/case">成功案例</a></li>--}}
                    {{--<li><a class="animated" href="/contact">联系我们</a></li>--}}
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<div id="banner">
    <div class="container-fluid myStyle">
        <div class="row">
            <div class="carousel slide" id="slidershow" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li  data-target="#slidershow" data-slide-to="0"></li>
                    <li  data-target="#slidershow" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset('pc/image/banner1.jpg') }}" alt="" class="img-responsive center-block">
                    </div>
                    <div class="item">
                        <img src="{{ asset('pc/image/banner2.jpg') }}" alt="" class="img-responsive center-block">
                    </div>
                </div>
                <a href="#slidershow" data-slide="prev" class="left carousel-control" >
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#slidershow" data-slide="next" class="right carousel-control" >
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>
@yield('content')
<footer style="background: #323232;color: #fff;margin-top: 50px;padding: 20px 0px;">
    <div class="container">
        <p class="text-center">江苏宜宝设备制造有限公司</p>
        <p class="text-center">电话：0510-86189858</p>
        <p class="text-center">传真：0510-86175288</p>
        <p class="text-center">地址：江苏省江阴市锡澄路1008号</p>
    </div>
</footer>
<script src="{{ asset('pc/js/jquery-3.2.1.js') }}"></script>
<script src="{{ asset('pc/js/bootstrap.min.js') }}"></script>
<script>
    $(function(){
        var pathname = window.location.pathname;
        var li = $('#navbar-nav-ul li');
        for(var i=0; i<li.length; i++) {
           if (pathname == $(li[i]).find('a').attr('href')) {
                $(li[i]).addClass('active');
           }
        }
    })
    $("#slidershow").carousel({
        interval: 3000
    });
    $("#slidershow").hover(function(){
        $(".carousel-control").css("display","block")
    },function(){
        $(".carousel-control").css("display","none")
    });
    $(".icons").on("click",function(){ /*zoomOutLeft*/
        $(".newCenter").addClass("zoomInRight");
        setTimeout(function(){
            $(".newCenter").removeClass("zoomInRight");
        },1000)
    })
</script>
@yield('js')
</body>
</html>