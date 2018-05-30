<nav class="navbar-expand-sm navbar-dark userbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item active">
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