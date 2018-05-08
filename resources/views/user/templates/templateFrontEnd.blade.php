

<html>
<head>
    <title>Template @section('title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/template.css')}}" rel="stylesheet">
</head>
<body>
@section('userbar')
    @include('layouts.userbar')
@section('headbar')
    @include('layouts.headbar')
@show

<div class="container">
    @section('content')
</div>
</body>
</html>