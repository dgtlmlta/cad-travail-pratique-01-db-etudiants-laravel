<x-layouts.mainframe :pageTitle="$pageTitle">
    <h1>{{ __('etudiants/index.headerTitle') }}</h1>

    <ul>
        @foreach ($etudiants as $etudiant)
            <li><a href="/etudiants/{{ $etudiant->id }}">{{ $etudiant->user->name }}</a></li>
        @endforeach
    </ul>

    @can('create', App\Models\Etudiant::class)
        <a href="/etudiants/ajout"
           class="btn btn-primary mb-5">{{ ucfirst(__('etudiants/index.addStudentButton')) }}</a>
    @endcan

    {{ $etudiants->onEachSide(2)->links() }}
</x-layouts.mainframe>
