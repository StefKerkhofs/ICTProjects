<html>
<head>
        <!--<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/userHeader.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}"/>
        <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">-->
    <title>App Name - @yield('title')</title>
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
        header li:first-child a{
            border-right: 1px solid white;
        }
        header li a{
            padding: 0 20px;
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
            list-style: none;
            height: 100%;
        }
        #side-bar li{
            line-height: 50px;
            font-size: larger;
            border-bottom: 1px solid lightgray;
            text-transform: uppercase;
        }
        section#content{
            background-color: white;
            margin: 50px 50px 50px 250px;
        }
    </style>
</head>
<body>
<header>
    <div id="top-bar">
        <ul>
            <li><a>Admin</a></li>
            <li><a>Afmelden</a></li>
        </ul>
    </div>
    <div id="bottom-bar">
        <img src="{{asset('images/logo.png')}}" style="height: 90px; width: auto;"/>
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

<section id="content">
    @yield('content')
</section>
</body>
</html>