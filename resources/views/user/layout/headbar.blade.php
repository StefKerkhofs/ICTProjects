<?php use \App\Http\Controllers\HomeController;?>

<nav class="navbar navbar-expand-lg navbar-dark headbar">

    <img src="{{asset("/image/ucll_3493.png")}}" alt="ucll logo" height="55" width="120"/>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarS" aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarS">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/info">Info <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Reis 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="/">Reis 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="/filter">Deelnemers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="/searchStudentEdit">Editeer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="/reg">Registreren</a>
            </li>

            <?php $navbars = HomeController::index(); ?>
                @foreach($navbars as $navbar)

                    <li class="nav-item">
                        <a class="nav-link navlink" href="{{ url("/").'/'.$navbar->name }}">{{ $navbar->name }}</a>
                    </li>

                @endforeach

            <li class="nav-item">
                <a class="nav-link"  href="/">test</a>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>

