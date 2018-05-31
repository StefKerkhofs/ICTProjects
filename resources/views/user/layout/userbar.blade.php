<nav class="navbar-expand-sm navbar-dark userbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-3">
            <?php
            if (\Illuminate\Support\Facades\Auth::user())
            {
                $sUserFirstname = \App\Traveller::where('user_id',\Illuminate\Support\Facades\Auth::id())->value('firstname');
                $sUserLastname = \App\Traveller::where('user_id',\Illuminate\Support\Facades\Auth::id())->value('lastname');
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">Welcome, <?php echo $sUserFirstname , " " , $sUserLastname ?></a>
                </li>
                <?php
            }
            ?>
            @guest
            <li class="nav-item">
                <a class="nav-link" href="/logInUser">Log in</a>
            </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/logoutUser">Log out</a>
                </li>
            @endguest
        </ul>
    </div>
</nav>