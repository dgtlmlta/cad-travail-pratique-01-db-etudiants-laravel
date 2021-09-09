<x-layouts.mainframe pageTitle="Bienvenue !">
	<h1>Nos étudiants</h1>
	<ul>
		@foreach ($etudiants as $etudiant)
		<li><a href="/etudiants/{{ $etudiant->id }}">{{ $etudiant->nom }} de {{ $etudiant->ville->nom }}</li>			
		@endforeach
	</ul>

	{{ $etudiants->links("pagination::bootstrap-4") }}
</x-layouts.mainframe>