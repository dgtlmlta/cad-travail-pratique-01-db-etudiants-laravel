<x-layouts.mainframe :pageTitle="$pageTitle">
    <h1>{{ __("etudiants/index.headerTitle") }}</h1>
    <ul>
        @foreach ($etudiants as $etudiant)
        <li><a href="/etudiants/{{ $etudiant->id }}">{{ $etudiant->user->name }} de {{ $etudiant->ville->nom }}</a></li>
        @endforeach
    </ul>

    {{  $etudiants->onEachSide(2)->links()  }}
</x-layouts.mainframe>
