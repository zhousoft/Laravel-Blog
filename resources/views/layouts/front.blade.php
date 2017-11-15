<!DOCTYPE html>
<html lang="zh-cn">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="zhousoft">

    <title>@yield('title')</title>

    {{--  <link href={{asset("/css/blog-home.css")}} rel="stylesheet">  --}}
    <!-- Bootstrap core CSS -->
    
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" >

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    {{-- <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> --}}

    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/prettify/r298/prettify.min.css">
    <link href={{asset("/css/blog-home.css")}} rel="stylesheet">
    {{--  <link href="https://cdn.bootcss.com/prism/1.8.1/themes/prism.css" rel="stylesheet">  --}}
    <link href="https://cdn.bootcss.com/prism/1.8.1/themes/prism-okaidia.css" rel="stylesheet">
  </head>

  <body>

    @include('front.navigation')

    @yield('content')

    {{--  @include('front.right')  --}}
    @include('front.footer')
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.js"></script>
    {{--  代码高亮-待整合  --}}
    <script src="https://cdn.bootcss.com/prism/1.8.1/prism.js"></script>
    <script src="https://cdn.bootcss.com/prism/1.8.1/components/prism-php.js"></script>
    <script src="https://cdn.bootcss.com/prettify/r298/prettify.min.js"></script>
    {{--  <body onload="PR.prettyPrint()">  --}}
  </body>

</html>
