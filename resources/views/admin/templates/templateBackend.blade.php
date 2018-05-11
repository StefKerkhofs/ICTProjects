<html>
<head>
        <!--<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/userHeader.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}"/>-->
        <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <title>{{ config('app.name') }}</title>
    <style>
        body {
            background-color: #E9F3F8;
            overflow-y: hidden;
        }
        * {
            padding: 0;
            margin: 0;
        }
        header *{
            padding: 0;
            margin: 0;
            height: 48px;
        }
        header div {
            padding: 0 40px 0 60px;
        }
        #top-bar{
            background-color: #003469;
        }
        header ul{
            list-style: none;
            float: right;
        }
        header li{
            color: white;
            display: inline-block;
            line-height: 48px;
        }
        header li a{
            padding: 0 20px;
        }
        header li:first-child a{
            border-right: 1px solid white;
            padding-right: 25px;
        }
        #bottom-bar{
            background-color: #E00049;
            height: 90px;
        }
        #side-bar {
            float: left;
            background-color: white;
            width: 200px;
            text-align: center;
        }
        #side-bar ul{
            list-style-type: none;
            height: 100%;
        }
        #side-bar li{
            line-height: 50px;
            font-size: large;
            border-bottom: 1px solid lightgray;
            text-transform: uppercase;
        }
        section#content{
            background-color: white;
            width: 100%;
            overflow: hidden;
        }
        textarea{
            resize: none;
            width: 100%;
            height: 600px;
        }
        input[type="submit"], input[type="button"]{
            height: 50px;
            width: 200px;
            background-color: #003469;
            color: white;
            border: none;
            margin: 50px;
        }
        .actions{
            text-align: center;
        }
        article {
            margin-left: 200px;
            padding: 50px;
            overflow-y: auto;
        }
        footer{
            position: fixed;
            bottom: 0;
            line-height: 50px;
            text-align: center;
            background-color: #95C8DA;
            width: 100%;
        }
        @media only screen and (max-width: 904px) {
            #side-bar {
                height: 50px;
                width: 100%;
                text-align: center;
                overflow: hidden;
            }
            #side-bar li{
                display: inline-block;
                border: none;
                margin: 0 10px;
                font-size: medium;
            }
            input[type="submit"], input[type="button"]{
                margin: 50px 30px;
                width: 175px;
            }
            header div {
                padding: 0 10px 0 30px;
            }
        }
        @media only screen and (max-width: 580px) {
            input[type="submit"], input[type="button"]{
                margin: 50px 10px;
                width: 175px;
            }
            header div {
                padding: 0 0 0 10px;
            }
            #side-bar li{
                margin: 0 5px;
            }
        }
    </style>
</head>
<body onload="setDimensions()" onresize="setDimensions()">
    <header id="header">
        <div id="top-bar">
            <ul>
                <li><a>Admin</a></li>
                <li><a>Afmelden</a></li>
            </ul>
        </div>
        <div id="bottom-bar">
            <img src="{{asset('images/logo.svg')}}" style="height: 60px; width: auto; margin-top: 15px;"/>
        </div>
    </header>
    <nav id="side-bar">
        <ul>
            <a href="{{ url('admin/info') }}"><li>Info</li></a>
            <a href="{{ url('admin/trip') }}"><li>Reizen</li></a>
            <a href="{{ url('admin/zip') }}"><li>Postcodes</li></a>
            <a href="{{ url('admin/study') }}"><li>Richtingen</li></a>
            <a href=""><li>PDF</li></a>
            <a href=""><li>Contact</li></a>
        </ul>
    </nav>
    <article id="article">
        <section id="content">
            @yield('content')
        </section>
    </article>
    <footer id="footer">
        {{ date('Y') }} - {{ config('app.name') }}
    </footer>
    <script type="text/javascript">
        setDimensions = function () {
            var pageHeight = window.innerHeight;
            var pageWidth = window.innerWidth;
            var footerHeight = document.getElementById('footer').offsetHeight;
            var headerHeight = document.getElementById('header').offsetHeight;

            var article = document.getElementById('article');
            var sidebar = document.getElementById('side-bar');

            if (pageWidth < 905){
                headerHeight += sidebar.offsetHeight;
                article.style.marginTop = sidebar.offsetHeight;
                article.style.marginLeft = 0;
                article.style.padding = 30;
                if (pageWidth < 581){
                    article.style.padding = 10;
                }
            }
            else {
                article.style.marginTop = 0;
                article.style.marginLeft = sidebar.offsetWidth;
                article.style.padding = 50;
            }

            article.style.height = pageHeight - headerHeight - footerHeight;
        };
    </script>
</body>
</html>