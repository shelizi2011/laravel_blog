<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">首页</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('user.index')}}">用户列表</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                @auth
                    <a href="{{route('user.edit',auth()->user())}}" class="btn btn-success my-2 my-sm-0 mr-2">修改资料</a>
                    <a href="{{route('logout')}}" class="btn btn-success my-2 my-sm-0 mr-2">退出登录</a>
                @else
                    <a href="{{route('user.create')}}" class="btn btn-success my-2 my-sm-0 mr-2">注册</a>
                    <a href="{{route('login')}}" class="btn btn-primary my-2 my-sm-0">登录</a>
                @endauth

            </form>
        </div>
    </nav>
    @include('layouts.errors')
    @include('layouts.message')
    @yield('content')
</div>
<script src="/js/app.js"></script>
</body>
</html>