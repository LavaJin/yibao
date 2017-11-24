@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-1g-12">
                    <ol class="breadcrumb">
                        <li><a href="/">首页</a></li>
                        <li  class="active">联系我们</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-center">联系我们</h4>
                    <div class="page-header text-center">
                        <h5>电话：0510-86189858</h5><br>
                        <h5>传真：0510-86175288</h5><br>
                        <h5>地址：江苏省江阴市锡澄路1008号</h5><br>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h4 class="text-center">在线留言</h4>
                    <form action="">
                        <div class="form-group">
                            <label for=""><span class="text-danger">*</span>名字</label>
                            <input type="text" class="form-control input-lg" name="name" id="name" placeholder="输入你的姓名">
                        </div>
                        <div class="form-group">
                            <label for=""><span class="text-danger">*</span>邮箱</label>
                            <input type="text" class="form-control input-lg" name="email" id="email" placeholder="输入你的邮箱">
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span>电话</label>
                            <input type="text" class="form-control input-lg" name="phone" id="phone" placeholder="请输入联系方式">
                        </div>
                        <div class="form-group">
                            <label for=""><span class="text-danger">*</span>内容</label>
                            <textarea class="form-control input-lg" rows="10" name="content" id="content" placeholder="请输入留言内容"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block btn-lg" type="button" id="submitBtn">提交</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    $(function(){

        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
        });
        $('#submitBtn').click(function(){
            var name = $('#name').val(),
                email = $('#email').val(),
                phone = $('#phone').val(),
                content = $('#content').val();
            if (!name || !phone || !content || !email) {
                return alert('请填写*号必填项');
            }

            var data = {
                name: name,
                email: email,
                phone: phone,
                content: content,
            };

            $.ajax({
                url: '{{ route('post:message') }}',
                method: 'POST',
                dataType: 'json',
                data: data,
                success(response) {
                    alert('留言成功');
                },
                error(error) {
                    alert('留言失败, 请稍后再试  ');
                }
            })
        })
    });
</script>
@endsection    
