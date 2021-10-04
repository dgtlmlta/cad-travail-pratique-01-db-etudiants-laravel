<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ $pageTitle ?? "Test" }} :: Entrailles-les-Oies</title>
	<meta name="description" content="Site web de l'école Entrailles-les-Oies de Saint-Jean-de-Bosco">

	<!-- Fonts -->

	<!-- Stylesheets -->
	<link rel="stylesheet" href="/css/app.css">

	<!-- Scripts -->
	<script type="text/javascript" src="/js/app.js"></script>
    {{-- Librairie nécessaire pour les dropdowns --}}
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</head>

<body class="m-4">
	<header class="container">
        <nav class="nav nav-pills nav-fill">
            <a class="nav-item nav-link @if(Route::is("index"))active @endif" href="/">Accueil</a>

            <a class="nav-item nav-link @if(Route::is("etudiants.index"))active @endif" href="/etudiants">Nos étudiants</a>

            <a class="nav-item nav-link @if(Route::is("forum.index"))active @endif" href="/forum">Le forum</a>

            <a class="nav-item nav-link @if(Route::is("auth.login"))active @endif" href="/authentification">S'authentifier</a>

            <div class="nav-item dropdown dropdown-locale">
                <button
                    class="btn dropdown-toggle"
                    type="button"
                    id="dropdownLocaleButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    {{ strtoupper(App::getLocale()) }}
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownLocaleLink">
                    <a
                        class="dropdown-item
                        @if(App::getLocale() === "fr") active @endif"
                        href="/locale/fr">FR</a>
                        <a
                        class="dropdown-item
                        @if(App::getLocale() === "en") active @endif"
                        href="/locale/en">EN</a>
                  </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        <div class="col-8">
		{{ $slot }}
		</div>
    </main>
</body>
</html>
