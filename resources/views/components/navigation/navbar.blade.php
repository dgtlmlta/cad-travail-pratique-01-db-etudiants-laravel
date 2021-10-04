<nav class="nav nav-pills nav-fill">
    <a class="nav-item nav-link @if (Route::is('index'))active @endif" href="/">Accueil</a>

    <a class="nav-item nav-link @if (Route::is('etudiants.index'))active @endif" href="/etudiants">Nos étudiants</a>

    <a class="nav-item nav-link @if (Route::is('forum.index'))active @endif" href="/forum">Le forum</a>

    <a class="nav-item nav-link @if (Route::is('auth.login'))active @endif" href="/authentification">S'authentifier</a>

    <div class="nav-item dropdown dropdown-locale">
        <button class="btn dropdown-toggle" type="button" id="dropdownLocaleButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            {{ strtoupper(App::getLocale()) }}
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownLocaleLink">
            @foreach ($availableLocales as $locale => $fullname)
                <a class="dropdown-item
                @if (App::getLocale() === $locale) active @endif" href="/locale/{{ $locale }}">{{ strtoupper($locale) }}</a>
            @endforeach
        </div>
    </div>
</nav>
