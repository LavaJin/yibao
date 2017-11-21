@extends('layouts.admin')

@section('style')
    <style>
        .pagination {  margin: 0 !important;  }
    </style>
@endsection

@section('content')
    <h4 class="page-header">新闻管理</h4>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="btn btn-success btn-sm" href="{{ route('news.create') }}">添加</a>
        </div>
        <div class="panel-body">
            {{ $news->links() }}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>文章标题</th>
                        <th>文章作者</th>
                        <th>创建日期</th>
                        <th>修改日期</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($news as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ empty($item->author) ? '未知' : $item->author->name }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">编辑</a>
                            <form action="{{ route('news.destroy', $item->id) }}"
                                    method="post"
                                    style="display: inline-block;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-sm delete-btn" type="button">删除</button>
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
    <script>
        $(function (e) {
           $('.delete-btn').click(function (e) {
              if (confirm('确认要删除该文章么？')) {
                  $(this).parent().submit();
              }
           });
        });
    </script>
@endsection
