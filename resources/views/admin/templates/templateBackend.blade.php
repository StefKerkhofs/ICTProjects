<html>
<head>
    <!--<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/userHeader.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}"/>

        <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('userMenu')
@show
@section('mainMenu')
@show

@section('sidebar')
@show

<div class="container">
    @yield('content')
</div>
@section('footer')
@show
</body>
</html>