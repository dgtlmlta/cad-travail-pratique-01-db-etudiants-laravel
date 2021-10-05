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
        <x-navigation.navbar />
    </header>

    <main class="container mt-5">
        <div class="container-fluid col-8 justify-content-center">
		{{ $slot }}
		</div>
    </main>
</body>
</html>
