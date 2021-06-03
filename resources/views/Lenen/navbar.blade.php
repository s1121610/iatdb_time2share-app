<nav class="nav-subpage">
    <a class="u-noLinkStyle" href="/">
        <figure class="landing-header__logo landing-header__logo--subpage">
            <p class="landing-header__logo__tekst--subpage landing-header__logo__tekst">Time<span class="u-blue">2</span>Share</p>
        </figure>
    </a>
    <ul class="nav__subpage u-float">
        <li class="nav__subpage__item"><a class="nav__list__item--link" href="/">Home</a></li>
        <li class="nav__subpage__item"><a class="nav__list__item--link" href="/aanbod">Aanbod</a></li>
        @if(Auth::user() == null)
            <li class="nav__subpage__item"><button class="u-button u-button--secondary" onclick="window.location.href='/login'">Login</button></li>
            <li class="nav__subpage__item"><button class="u-button u-button--primary" onclick="window.location.href='/register'">Aanmelden</button></li>
        @else
            <li class="nav__subpage__item nav__subpage__item--greeting"><p>Hallo {{Auth::user()->name}}</p></li>
            <li class="nav__subpage__item"><button class="u-button u-button--primary" onclick="window.location.href='/account'">Account</button></li>
            <li class="nav__subpage__item">
                <form method="POST" action="/logout">
                    @csrf
                    <button class="u-button u-button--secondary">Uitloggen</button>
                </form>
            </li>
        @endif
    </ul>
</nav>