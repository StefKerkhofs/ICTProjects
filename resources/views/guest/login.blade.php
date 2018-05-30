@extends('user.templates.templateFrontEnd')


@section('content')
    <div class="container">
    <h1>Log in</h1>

    <form method="POST" action="/logInUser">

        {{ csrf_field() }}

    <div class="form-group">
        <label>Email: </label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
        <label>password: </label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Log in</button>
    </div>

    </form>
    </div>
@endsection()