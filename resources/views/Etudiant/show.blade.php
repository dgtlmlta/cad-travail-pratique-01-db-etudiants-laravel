<x-layouts.mainframe>
	<h1>{{ $etudiant->nom }}</h1>
	
	<dl>
		<div>
			<dt>Adresse</dt>
			<dd>{{ $etudiant->adresse }}</dd>
		</div>
		<div>
			<dt>Courriel</dt>
			<dd>{{ $etudiant->courriel }}</dd>
		</div>
		<div>
			<dt>Téléphone</dt>
			<dd>{{ $etudiant->telephone }}</dd>
		</div>
		<div>
			<dt>Date de naissance</dt>
			<dd>{{ $etudiant->ddn }}</dd>
		</div>
	</dl>
	<span>{{ $etudiant->ville->nom }}</span>

	<div class="mt-3">
		<a class="btn btn-primary" href="/etudiant/{{ $etudiant->id }}/edit">Mettre à jour</a>
		<form action="{{ route("etudiants.destroy", $etudiant->id) }}" method="POST" class="mt-3">
			@csrf
			@method('delete')
			<button class="btn btn-primary" href="/etudiant/{{ $etudiant->id }}" type="submit">Supprimer</button>
		</form>
	</div>
</x-layouts.mainframe>