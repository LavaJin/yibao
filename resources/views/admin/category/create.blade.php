@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h4 class="page-header">栏目添加</h4>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="btn btn-default btn-sm" href="{{ route('categories.index') }}">返回</a>
        </div>
        <div class="panel-body">
            <div class="col-md-6">
                <form action="{{ route('categories.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""><span class="text-danger">*</span>栏目名称</label>
                        <input type="text" class="form-control" name="name" placeholder="请输入栏目名称" required>
                    </div>
                    <div class="form-group">
                        <label for=""><span class="text-danger">*</span>所属栏目</label>
                        <select name="pid" id="pid" class="form-control" required>
                            <option value="0">顶级栏目</option>
                            @foreach($categories as $category)
                                @php
                                    $repeat = str_repeat('&nbsp;&nbsp;&nbsp;', $category['level']);
                                @endphp
                                <option value="{{ $category['id'] }}">{{ sprintf('%s%s', $repeat, $category['name'])  }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(function (e) {
            console.log(111);
        })
    </script>
@endsection
