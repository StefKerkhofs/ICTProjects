
@extends('templates.templateBackend')


@section('title', 'Page Title')
@section('userMenu')
    @include('layout.userHeader')
@endsection
@section('mainMenu')
    @include('layout.header')
@endsection
@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
    <div id="content">

    <div class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <p>This is my body content.</p>
    </div>
    </div>

@endsection
@section('footer')
    @include('layout.footer')
@endsection