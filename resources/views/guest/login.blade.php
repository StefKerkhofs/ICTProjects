@extends('user.templates.templateFrontEnd')
@section('title') <title>Login</title>
@section('content')
    <div class="container">
    <h1>Log in</h1>

        @if(session()->has('message'))
            <div class="alert alert-danger">
                {{ session()->get('message') }}
            </div>
        @endif

        <form method="POST" action="/logInUser">

        {{ csrf_field() }}

    <div class="form-group">
        <label>Email: </label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
        <label>Password: </label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Log in</button>
    </div>

    </form>
    </div>
@endsection()