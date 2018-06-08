<html>
<head>
    <!-- Style Sheets CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script type="text/javascript" src="{{ asset("js/main.js") }}"></script>
    <!-- Page Title -->
    <title>{{ config('app.name') }}</title>
</head>
<body onload="setDimensions();" onresize="setDimensions();">
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
    <!-- Custom Scripts -->
    <script type="text/javascript">var url = window.location.href;
        var navList = document.getElementById('side-bar');
        var links = navList.querySelectorAll("a");
        for (var i = 0; i < links.length; i++){
            if (url.startsWith(links[i].href))
                links[i].className += ("active");
        };
    </script>
    <script type="text/javascript">
        tableOnClick = function (tripId) {
            var url = window.location.href;
            if (!url.endsWith('/')){
                url += '/';
            }
            document.location=url + tripId;
        }
    </script>
</body>
</html>