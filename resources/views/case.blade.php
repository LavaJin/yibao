@extends('layouts.app')
@section('css')
    <style>
        .tab-content {
            border: 1px solid #ddd;
            border-top: none;
            padding: 50px;
            border-radius: 0 0 5px 5px;
        }
        #b > img {
            box-shadow: 1px 1px 12px;
            margin-bottom: 10px;
        }
        #a > img {
            box-shadow: 1px 1px 12px;
            margin-bottom: 10px;
        }
    </style>
@endsection
@section('content')
    <div id="content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">首页</a></li>
                <li class="active">案例</li>
            </ol>
            <div class="divider"></div>
        </div>
        <div class="container">
            <ul class="nav nav-tabs">
                <li  class="active"><a href="#a" data-toggle="tab">成功案例</a></li>
                <li><a href="#b" data-toggle="tab">经典案例</a></li>
            </ul>
            <ul class="tab-content">
                <li id="a" class="tab-pane active">
                    <img class="img-responsive center-block " src="{{ asset('pc/image/s1.jpg') }}" alt="">
                    <img class="img-responsive center-block " src="{{ asset('pc/image/s2.jpg') }}" alt="">
                    <img class="img-responsive center-block " src="{{ asset('pc/image/s3.jpg') }}" alt="">
                </li>
                <li id="b" class="tab-pane">
                    <img class="img-responsive center-block " src="{{ asset('pc/image/j1.jpg') }}" alt="">
                    <img class="img-responsive center-block " src="{{ asset('pc/image/j2.jpg') }}" alt="">
                    <img class="img-responsive center-block " src="{{ asset('pc/image/j3.jpg') }}" alt="">
                    <img class="img-responsive center-block " src="{{ asset('pc/image/j4.jpg') }}" alt="">
                    <p class="text-center" style="margin-top: 40px;">
                        单台处理量2200m³/h  <br>
                        传热系数6500W/(㎡*K） <br>
                        阻力损失80KPa <br>
                        设计与运行误差：<5%  <br>
                    </p>
                </li>
            </ul>
        </div>
    </div>
@endsection

