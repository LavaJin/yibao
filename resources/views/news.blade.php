@extends('layouts.app')
@section('css')
<style>
    #news-content img {
        width: 100%;
    }
    #news-title {
        margin-bottom: 30px;
    }
</style>
@endsection
@section('content')
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                      <li><a href="/">首页</a></li>
                      <li><a href="/category/{{ $news->category->id }}">{{ $news->category->name }}</a></li>
                      <li  class="active">{{ $news->title }}</li>
                    </ol>
                </div>
                <div class="col-lg-12" id="news-content">
                        <h2 class="text-center" id="news-title">{{ $news->title }}</h2>
                    {!! $news->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection

