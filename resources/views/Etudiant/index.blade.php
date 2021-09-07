<x-layouts.mainframe pageTitle="Bienvenue !">
	<h1>Nos étudiants</h1>
	<ul>
		@foreach ($etudiants as $etudiant)
		<li><a href="">{{ $etudiant->nom }} de {{ $etudiant->ville->nom }}</li>			
		@endforeach
	</ul>
</x-layouts.mainframe>