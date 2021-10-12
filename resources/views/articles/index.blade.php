<x-layouts.mainframe :pageTitle="$pageTitle">
    <h1>{{ __("articles/index.headerTitle") }}</h1>

    @can('create', App\Models\Article::class)
        <a href="/articles/ajout"
           class="btn btn-primary mb-5">{{ ucfirst(__('articles/index.addArticleButton')) }}</a>
    @endcan

    <x-article-listing />
</x-layouts.mainframe>
