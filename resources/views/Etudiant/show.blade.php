<x-layouts.mainframe>
	<h1>{{ $etudiant->nom }}</h1>
	<span>{{ $etudiant->ville->nom }}</span>

	<div>
		<a class="btn btn-primary" href="/etudiant/{{ $etudiant->id }}/edit">Mettre à jour</a>
		<form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="POST">
			@method('delete')
			<a class="btn btn-primary" href="/etudiant/{{ $etudiant->id }}">Supprimer</a>
		</form>
	</div>
</x-layouts.mainframe>