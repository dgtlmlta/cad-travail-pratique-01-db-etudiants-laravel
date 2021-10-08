<x-layouts.mainframe :pageTitle="$etudiant->user->name">
    <h1>{{ $etudiant->user->name }}</h1>

    <dl>
        <div>
            <dt>{{ ucfirst(__('common.address')) }}</dt>

            <dd>
                <address>
                    {{ $etudiant->adresse }}<br>
                    {{ $etudiant->ville->nom }}
                </address>
            </dd>
        </div>

        <div>
            <dt>{{ ucfirst(__('common.email')) }}</dt>
            <dd>{{ $etudiant->user->email }}</dd>
        </div>

        <div>
            <dt>{{ ucfirst(__('common.phone')) }}</dt>

            <dd>{{ $etudiant->telephone }}</dd>
        </div>

        <div>
            <dt>{{ ucfirst(__('common.dob')) }}</dt>

            <dd>{{ $etudiant->formatted_ddn }}</dd>
        </div>
    </dl>

    <div class="mt-3">
        {{-- Peut mettre à jour un étudiant --}}
        @can('update', $etudiant)
            <a class="btn btn-primary"
               href="/etudiants/{{ $etudiant->id }}/modifier">{{ ucfirst(__('etudiants/show.updateButton')) }}</a>
        @endcan

        {{-- Peut supprimer un étudiant --}}
        @can('delete', $etudiant)
            <form action="{{ route('etudiants.destroy', $etudiant->id) }}"
                  method="POST"
                  class="mt-3">
                @csrf
                @method('delete')
                <button class="btn btn-danger"
                        href="/etudiants/{{ $etudiant->id }}"
                        type="submit">{{ ucfirst(__('etudiants/show.deleteButton')) }}</button>
            </form>
        @endcan
    </div>
</x-layouts.mainframe>
