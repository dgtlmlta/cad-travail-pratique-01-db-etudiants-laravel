<x-layouts.mainframe>
    <h1>{{ __("files/index.headerTitle") }}</h1>

    @can('create', App\Models\File::class)
        <a href="/files/ajout"
           class="btn btn-primary mb-5">{{ ucfirst(__('files/index.addButton')) }}</a>
    @endcan

    <x-file-listing />
</x-layouts.mainframe>
