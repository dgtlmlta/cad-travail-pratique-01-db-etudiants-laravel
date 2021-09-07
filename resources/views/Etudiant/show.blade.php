<x-layouts.mainframe>
	<h1>{{ $etudiant->nom }}</h1>
	<span>{{ $etudiant->ville->nom }}</span>

	<div>
		<a class="btn btn-primary" href="/etudiant/{{ $etudiant->id }}/edit">Mettre à jour</a>
		<form action="{{ route("etudiant.destroy", $etudiant->id) }}" method="POST">
			@csrf
			@method('delete')
			<button class="btn btn-primary" href="/etudiant/{{ $etudiant->id }}" type="submit">Supprimer</button>
		</form>
	</div>
</x-layouts.mainframe>