<nav class="nav nav-pills nav-fill">
    <a class="nav-item nav-link @if (Route::is('index'))active @endif"
       href="/">{{ __('navigation.home') }}</a>

    <a class="nav-item nav-link @if (Route::is('etudiants.index'))active @endif"
       href="/etudiants">{{ __('navigation.students') }}</a>

    <a class="nav-item nav-link @if (Route::is('forum.index'))active @endif"
       href="/forum">{{ __('navigation.forum') }}</a>

    @auth
        <div class="nav-item dropdown dropdown-user">
            <button class="btn dropdown-toggle"
                    type="button"
                    id="dropdownUserButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                Salut, {{ Auth::user()->name }} !
            </button>

            <div class="dropdown-menu"
                 aria-labelledby="dropdownUserLink">
                <a class="dropdown-item"
                   href="/deconnecter">
                    {{ __('logout') }}</a>
            </div>
        </div>
    @endauth
    @guest
        <a class="nav-item nav-link @if (Route::is('auth.login'))active @endif"
           href="/authentification">{{ __('navigation.login') }}</a>
    @endguest

    <div class="nav-item dropdown dropdown-locale">
        <button class="btn dropdown-toggle"
                type="button"
                id="dropdownLocaleButton"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
            {{ strtoupper(App::getLocale()) }}
        </button>

        <div class="dropdown-menu"
             aria-labelledby="dropdownLocaleLink">
            @foreach ($availableLocales as $locale => $fullname)
                <a class="dropdown-item
                @if (App::getLocale() === $locale) active @endif"
                   href="/locale/{{ $locale }}">{{ strtoupper($locale) }}</a>
            @endforeach
        </div>
    </div>
</nav>
