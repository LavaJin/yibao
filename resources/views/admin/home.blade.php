@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h3 class="page-header">首页</h3>
    {{-- <div class="row"> --}}
      <div class="panel panel-default">
        <div class="panel-heading">网站设置</div>
        <div class="panel-body">
          <div class="col-md-4">
            <form action="{{ route('site.setting') }}" method="POST" id="accountform">
                {{ csrf_field() }}   
                <div class="form-group">
                    <label for="">网站标题</label>
                    <input type="text" class="form-control" name="title" placeholder="网站标题" id="name" value="{{$setting?$setting['title'] : ''}}">
                </div>
                <div class="form-group">
                    <label for="">网站关键词</label>
                    <input type="text" class="form-control" name="keywords" placeholder="网站关键词" value="{{$setting?$setting['keywords'] : ''}}">
                </div>
                <div class="form-group">
                    <label for="">网站描述</label>
                    <input type="text" class="form-control" name="description" placeholder="网站描述" value="{{$setting?$setting['description'] : ''}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block">提交</button>
                </div>
            </form>
          </div>
        </div>
      {{-- </div> --}}
    </div>
@endsection

@section('javascript')

@endsection
