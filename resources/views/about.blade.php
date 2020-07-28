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
                <li class="active">关王我们</li>
            </ol>
            <div class="divider"></div>
        </div>
        <div class="container">

        </div>
    </div>
@endsection

