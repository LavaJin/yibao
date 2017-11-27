@extends('layouts.admin')

@section('style')
<style>
    .pagination {  margin: 0 !important;  }
</style>
@endsection

@section('content')
    <h4 class="page-header">管理管理</h4>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="btn btn-success btn-sm" href="{{ route('account.create') }}">添加</a>
        </div>
        <div class="panel-body">
            {{ $users->links() }}
           <table class="table table-bordered">
               <thead>
               <tr>
                   <th>#ID</th>
                   <th>管理员登陆名</th>
                   <th>管理员邮箱</th>
                   <th>管理员创建时间</th>
                   <th>操作</th>
               </tr>
               </thead>
               <tbody>
               @foreach($users as $user)
                   <tr>
                       <td>{{ $user->id }}</td>
                       <td>{{ $user->name }}</td>
                       <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                       <td>
                           <a class="btn btn-primary btn-sm" href="{{ route('account.edit', $user->id) }}">编辑</a>
                           <form action="{{ route('account.delete', $user->id) }}" method="post" style="display: inline-block;">
                               {{ csrf_field() }}
                               {{ method_field('DELETE') }}
                               <button class="btn btn-danger btn-sm">删除</button>
                           </form>
                       </td>
                   </tr>
               @endforeach
               </tbody>
           </table>
        </div>
    </div>
@endsection

@section('javascript')
@endsection
