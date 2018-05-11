<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"/>
    <script type="text/javascript" src="{{ asset("js/main.js") }}"></script>
    <title>{{ config('app.name') }}</title>
</head>
<body onload="setDimensions()" onresize="setDimensions()">
    <!-- Page Header -->
    @include('admin.inc.header')
    <!-- Page navigation -->
    @include('admin.inc.nav')
    <!-- Page Content -->
    <article id="article">
        <section id="content">
            @yield('content')
        </section>
    </article>
    <!-- Page Footer -->
    @include('admin.inc.footer')
</body>
</html>