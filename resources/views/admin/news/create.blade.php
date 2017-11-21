@extends('layouts.admin')

@section('style')
    <link href="{{ asset('assets/umeditor/themes/default/css/umeditor.css')}}" type="text/css" rel="stylesheet">
@endsection

@section('content')
    <h4 class="page-header">新闻添加</h4>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="btn btn-default btn-sm" href="{{ route('categories.index') }}">返回</a>
        </div>
        <div class="panel-body">
            <div class="col-md-8">
                <form action="{{ route('news.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""><span class="text-danger">*</span>文章标题</label>
                        <input type="text" class="form-control" name="title" placeholder="请输入文章标题" required>
                    </div>
                    <div class="form-group">
                        <label for=""><span class="text-danger">*</span>文章栏目</label>
                        <select name="category_id" class="form-control" required>
                            @foreach($categories as $category)
                                @php
                                    $repeat = str_repeat('&nbsp;&nbsp;&nbsp;', $category['level']);
                                @endphp
                                <option value="{{ $category['id'] }}">{{ sprintf('%s%s', $repeat, $category['name'])  }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""><span class="text-danger">*</span>文章内容</label>
                        <script type="text/plain" id="myEditor" style="width:100%;height:400px;"></script>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
<script type="text/javascript" src="{{ asset('assets/umeditor/third-party/template.min.js')}}"></script>
<script type="text/javascript" charset="utf-8" src="{{ asset('assets/umeditor/umeditor.config.js')}}"></script>
<script type="text/javascript" charset="utf-8" src="{{ asset('assets/umeditor/umeditor.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/umeditor/lang/zh-cn/zh-cn.js')}}"></script>
<script>
    $(function (e) {
        UM.getEditor('myEditor', {
            textarea: 'content',
        });
    })
</script>
@endsection
