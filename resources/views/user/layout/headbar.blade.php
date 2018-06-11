<?php use \App\Http\Controllers\HomeController;?>
<nav class="navbar navbar-expand-lg navbar-dark headbar">
<<<<<<< HEAD
    <img src="{{asset("/image/ucll_3493.png")}}" alt="ucll logo" height="55" width="120"/>
=======

    <img style="margin-right: 60px;margin-left: 50px;" src="{{asset("/images/logo.svg")}}" alt="ucll logo" height="60" width="auto"/>
>>>>>>> 6eec728541bcdcf5387a114e6f8bd64558607a8b
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarS" aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarS">
        <ul class="navbar-nav mr-auto">

            <?php $navbars = HomeController::index();?>
            <li class="nev-item">
                <a style="color: white" class="nav-link" href="{{ App\Menu::where('menu_id', 1)->first()->menu_name }}">{{ App\Menu::where('menu_id', 1)->first()->menu_name }}</a>
            </li>
            @foreach($navbars['navbars'] as $navbar)
                @if($navbar['is_active'] == true)
                    <li class="nav-item">
                        <a style="color: white" class="nav-link navlink" href="{{ url("/").'/'.$navbar['page_name'] }}">{{ $navbar['menu_name'] }}</a>
                    </li>
                    @endif
                @endforeach
                <?php
            //Check if logged in
                if (Auth::user()){
                    $sFunctie = \App\User::where('id',\Illuminate\Support\Facades\Auth::id())->value('function');
                    if ($sFunctie == 'Begeleider'){
                        ?>
                <li class="nav-item">
                    <a style="color: white" class="nav-link"  href="/filter">Deelnemers</a>
                </li>
                <li class="nav-item">
                    <a style="color: white" class="nav-link"  href="/searchTravellers">Editeer</a>
                </li>
                <?php
                    }
                    elseif ($sFunctie == 'Gebruiker'){
                ?>
                <li class="nav-item">
                    <a style="color: white" class="nav-link"  href="/reg">Registreren</a>
                </li>
                <?php
                    }
                }?>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a style="color: white" class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>

