@extends('layouts.admin')

@section('style')
    <style>
        .pagination {  margin: 0 !important;  }
    </style>
@endsection

@section('content')
    <h4 class="page-header">留言管理</h4>
    <div class="panel panel-default">

        <div class="panel-body">
            {{ $messages->links() }}
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#ID</th>
                    <th>留言姓名</th>
                    <th>留言邮箱</th>
                    <th>留言手机</th>
                    <th>留言内容</th>
                    <th>留言日期</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->phone }}</td>
                        <td>{{ $message->content }}</td>
                        <td>{{ $message->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascript')
@endsection
