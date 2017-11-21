@extends('layouts.admin')

@section('style')
<style>
    .pagination {  margin: 0 !important;  }
</style>
@endsection

@section('content')
    <h4 class="page-header">栏目管理</h4>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="btn btn-success btn-sm" href="{{ route('categories.create') }}">添加</a>
        </div>
        <div class="panel-body">
            {{ $categories->links() }}
           <table class="table table-bordered">
               <thead>
               <tr>
                   <th>#ID</th>
                   <th>栏目名称</th>
                   <th>创建日期</th>
                   <th>操作</th>
               </tr>
               </thead>
               <tbody>
               @foreach($categories as $category)
                   <tr>
                       <td>{{ $category->id }}</td>
                       <td>{{ $category->name }}</td>
                       <td>{{ $category->created_at }}</td>
                       <td>
                           <a class="btn btn-primary btn-sm" href="{{ route('categories.edit', $category->id) }}">编辑</a>
                           <form action="{{ route('categories.destroy', $category->id) }}" method="post" style="display: inline-block;">
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
