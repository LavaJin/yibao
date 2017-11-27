@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h4 class="page-header">账号修改</h4>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="btn btn-default btn-sm" href="{{ route('account.index') }}">返回</a>
        </div>
        <div class="panel-body">
            <div class="col-md-6">
                <form action="{{ route('account.edit', $user->id) }}" method="POST" id="accountform">
                    {{ csrf_field() }}
                   {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="">登陆用户</label>
                        <input type="text" class="form-control" name="name" placeholder="登录名" id="name" autocomplete="off" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="">登陆用户</label>
                        <input type="email" class="form-control" name="email" placeholder="邮箱" id="name" autocomplete="off" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="">登陆密码</label>
                        <input type="password" class="form-control" name="password" placeholder="密码" id="password" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block" type="button" id="submiBtn">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
<script>
    $(function(){
        $('#submiBtn').click(function(){
            if (!$('#name').val() && !$('#password').val()) {
                return window.alert('请填写需要修改的登陆用户或者登陆密码');
            }
            $('#accountform').submit();
        });
    })
</script>
@endsection
