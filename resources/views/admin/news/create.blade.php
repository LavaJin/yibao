@extends('layouts.admin')
@include('vendor.ueditor.assets')
@section('style')

@endsection

@section('content')
    <h4 class="page-header">内容添加</h4>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="btn btn-default btn-sm" href="{{ route('news.index') }}">返回</a>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                <form action="{{ route('news.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""><span class="text-danger">*</span>标题</label>
                        <input type="text" class="form-control" name="title" placeholder="请输入标题" required>
                    </div>
                    <div class="form-group">
                        <label for=""><span class="text-danger">*</span>栏目</label>
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
                        <label for=""><span class="text-danger">*</span>内容</label>
                        <!-- 编辑器容器 -->
                        <script id="container" name="content" type="text/plain"></script>
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
<script type="text/javascript">
    $(function () {
        var ue = UE.getEditor('container', {
            initialFrameHeight: 400,
        });
        ue.ready(function() {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });
    });
</script>
@endsection
