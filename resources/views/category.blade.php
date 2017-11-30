@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('pc/css/productCenter.css') }}">
<style>
.myStyless {
    box-shadow: 0px 0px 32px -7px #000;
    border-radius: 5px;
}
.myStyles {
    box-shadow: 0px 0px 20px -4px #000;
    border-radius: 5px;
}
.pagination>.active>span{
    background-color: #000 !important;
    border: 1px #000 solid;
}
.pagination>li>a {
    color: #000 !important;
}
</style>
@endsection
@section('content')
    <div id="content">
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-lg-2">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">分类列表</h3>
                  </div>
                  <div class="panel-body">
                    <div class="list-group">
                    @if ($cates->count())
                          @foreach($cates as $cate)
                            <a href="/category/{{ $cate->id }}" class="list-group-item">{{ $cate->name }}</a>
                          @endforeach
                    @endif
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-10 ProductDetails">
                <h3 class="ProductList">{{ $cate->name }}列表</h3>
                <div class="ProductContent">
                    @if($news->count())
                        @foreach($news as $item)
                        <blockquote>
                          <p>{{ $item->title }} <span class="pull-right" style="color:#ccc;">{{ $item->created_at }}</span></p>
                          <footer class="text-right"><a href="/news/{{ $item->id }}">查看</a></footer>
                        </blockquote>
                        @endforeach
                    @else
                        <div class="help-block text-center">暂无内容</div>
                    @endif
                  </div>
               <div class="text-center">
                   {{ $news->links() }}
               </div>
           </div>
            </div>
        </div>
    </div>
@endsection

