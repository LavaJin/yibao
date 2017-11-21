<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>江苏宜宝设备制造有限公司-后台管理</title>

    @include('commons/css')

    @yield('style')

</head>

<body>

<div id="wrapper">

    @include('commons/nav')

    <div id="page-wrapper">

        <div class="row">
            <div style="margin-top: 30px;">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{{ session('success') }}</li>
                        </ul>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ session('error') }}</li>
                        </ul>
                    </div>
                @endif
            </div>
            @yield('content')
        </div>

    </div>

</div>

@include('commons/javascript')

@yield('javascript')

</body>

</html>
