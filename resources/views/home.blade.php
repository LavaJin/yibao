@extends('layouts.app')
@section('content')
    <div id="content">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="carousel slide" id="slidershows" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slidershows" data-slide-to="0"></li>
                                <li  data-target="#slidershows" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('pc/image/banner01.jpg') }}" alt="" class="img-responsive center-block">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('pc/image/banner02.jpg') }}" alt="" class="img-responsive center-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <p class="text-center">
                    <span style="color: #0055ab;">新闻资讯 </span>
                    <span style="color: #949494"> |  New center</span>
                    <a href="/category/{{ $category->id }}"><span class="glyphicon glyphicon-arrow-right"></span></a>
                </p>
                <div class="animated newCenter text-center">
                    {{-- <h5 style="font-weight: bold;">{{  $news->title }}</h5> --}}
                    <span style="color: #949494">{{ $news->created_at }} <a href="/news/{{ $news->id }}">查看</a> </span>
                    <p> {{  $news->title }}</p>
                </div>
                <div class="text-center" style="margin-top: 18px;">
                    <span class="glyphicon icons glyphicon-triangle-left" style="margin-right: 10px;"></span>
                    <span class="glyphicon icons glyphicon-triangle-right"></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 Mycol">
                <p class="text-center">
                    <span style="color: #0055ab;">公司简介 </span>
                    <span style="color: #949494"> |  About us</span>
                    <a href="/about"><span class="glyphicon glyphicon-arrow-right"></span></a>
                </p>
                <div>
                    <p style="text-indent:25px;padding-bottom: 13px;">江苏宜宝设备制造有限公司成立于2015年，总投资1500万，主要从事高效节能设备 —板式换热器以及换热机组，蒸发冷凝设备及其系统的生产销售；及换热设备维护和供热节能系统的技术咨询与服务。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: #fbfbfb;margin-top: 20px;">
        <div class="row">
            <div class="text-center" style="padding: 20px 0;">
                <span style="color: #0055ab;">产品中心 </span>
                <span style="color: #949494"> |  Product center</span>
            </div>
        </div>
    </div>
    <div class="container" >
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
            <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <span>公司资质</span>
                <span> | </span>
                <span style="color: #949494">Honor</span>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
                <img src="{{ asset('pc/image/img1.jpg') }}" alt="">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
            <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <span>经典案例</span>
                <span> | </span>
                <span style="color: #949494">Case</span>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
                <img src="{{ asset('pc/image/img2.jpg') }}" alt="">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
            <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <span>技术支持</span>
                <span> | </span>
                <span style="color: #949494">Support</span>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
                <img src="{{ asset('pc/image/img3.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection

