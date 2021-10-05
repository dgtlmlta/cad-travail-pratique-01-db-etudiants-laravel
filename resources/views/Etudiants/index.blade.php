<x-layouts.mainframe pageTitle="Bienvenue !">
    <h1>Nos étudiants</h1>
    <ul>
        @foreach ($etudiants as $etudiant)
        {{-- {{ dd($etudiant->user()) }} --}}
        <li><a href="/etudiants/{{ $etudiant->id }}">{{ $etudiant->user->name }} de {{ $etudiant->ville->nom }}</a></li>
        @endforeach
    </ul>

    {{  $etudiants->onEachSide(2)->links()  }}
</x-layouts.mainframe>
