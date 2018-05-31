<!DOCTYPE html>
<html>
    <head>
        <title>Template @section('title')</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{asset('css/template.css')}}" rel="stylesheet">
        <link rel="icon" href="{{asset("/image/UCLL_Logo.png")}}"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


        <section id="style"> @yield('style') </section>
    </head>
    <body>
        @section('cookiewindow') @include('user.layout.cookiewindow') @show

        @section('userbar') @include('user.layout.userbar') @show

        @section('headbar') @include('user.layout.headbar') @show

        <section id="content"> @yield('content') </section>

        <div class="footer">
            @section('footer') @include('user.layout.footer') @show
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>