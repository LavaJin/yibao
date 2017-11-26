@extends('layouts.app')
@section('css')
<style>
.myStyless {
    box-shadow: 0px 0px 32px -7px #000;
    border-radius: 5px;
}
.myStyles {
    box-shadow: 0px 0px 20px -4px #000;
    border-radius: 5px;
}
</style>
@endsection
@section('content')
    <div id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6" style="margin-left: 10px;">
                    <ol class="breadcrumb">
                      <li><a href="/">首页</a></li>
                      <li  class="active">{{ $cate->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 myStyless col-lg-offset-1" style="padding-top:10px;">
                    <h4>分类列表：</h4>
                    @if ($cates->count())
                        <div class="list-group">
                          @foreach($cates as $cate)
                            <a href="/category/{{ $cate->id }}" class="btn btn-default btn-block">{{ $cate->name }}</a>
                          @endforeach
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 myStyles" style="margin-left: 10px;padding-top: 24px;" >
                    @if($news->count())
                        @foreach($news as $item)
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                  <div class="panel-body">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                        <a href="#" style="font-size: 20px; text-decoration: none;color: #000;">
                                            {{ $item->title }}
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-right">{{ substr($item->created_at, 0, 10) }}</div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-right"><a href="/news/{{ $item->id }}">详情</a></div>
                                  </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="help-block text-center">暂无内容</div>
                    @endif
                    <div class="col-lg-12 text-center">
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

