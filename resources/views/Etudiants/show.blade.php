<x-layouts.mainframe :pageTitle="$etudiant->user->name">
    <h1>{{ $etudiant->nom }}</h1>

    <dl>
        <div>
            <dt>Adresse</dt>
            <dd>
                <address>
                    {{ $etudiant->adresse }}<br>
                    {{ $etudiant->ville->nom }}
                </address>
            </dd>
        </div>
        <div>
            <dt>Courriel</dt>
            <dd>{{ $etudiant->user->email }}</dd>
        </div>
        <div>
            <dt>Téléphone</dt>
            <dd>{{ $etudiant->telephone }}</dd>
        </div>
        <div>
            <dt>Date de naissance</dt>
            <dd>{{ $etudiant->formatted_ddn }}</dd>
        </div>
    </dl>

    <div class="mt-3">
        @can("update", $etudiant)
        <a class="btn btn-primary"
           href="/etudiants/{{ $etudiant->id }}/modifier">Mettre à jour</a>
        @endcan


        <form action="{{ route('etudiants.destroy', $etudiant->id) }}"
              method="POST"
              class="mt-3">
            @csrf
            @method('delete')
            <button class="btn btn-primary"
                    href="/etudiants/{{ $etudiant->id }}"
                    type="submit">Supprimer</button>
        </form>
    </div>
</x-layouts.mainframe>
