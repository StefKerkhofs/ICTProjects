<nav class="navbar-expand-sm navbar-dark userbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-3">
            <?php
            if (\Illuminate\Support\Facades\Auth::user())
            {
                $bracketsName = \Illuminate\Support\Facades\Auth::user()->select('email')->where('id',\Illuminate\Support\Facades\Auth::id())->get();
                $step1 = substr($bracketsName,11,strlen($bracketsName));
                $step2 = substr($step1,0,strlen($step1)-3);
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">Welcome, <?php echo $step2 ?></a>
                </li>
                <?php
            }
            ?>
            <li class="nav-item ">
                <a class="nav-link" href="/profile">Profile<span class="sr-only">(current)</span></a>
            </li>
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