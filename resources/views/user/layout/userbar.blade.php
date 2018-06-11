<nav class="navbar-expand-sm navbar-dark userbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-3">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="/logInUser">Aanmelden/Log in</a>
            </li>
            @else
                    <?php
                        $sUserFirstname = \App\Traveller::where('user_id',\Illuminate\Support\Facades\Auth::id())->value('firstname');
                        $sUserLastname = \App\Traveller::where('user_id',\Illuminate\Support\Facades\Auth::id())->value('lastname');
                        if ($sUserLastname !== null){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Welcome <?php echo $sUserFirstname,  " " , $sUserLastname ?></a>
                    </li>
                    <?php
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/logoutUser">Afmelden/Log out</a>
                    </li>
            @endguest
        </ul>
    </div>
</nav>