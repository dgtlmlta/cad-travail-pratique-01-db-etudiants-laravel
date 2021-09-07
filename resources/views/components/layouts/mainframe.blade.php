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
</head>

<body>
    {{ $slot }}
</body>
</html>