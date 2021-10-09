<x-layouts.mainframe :pageTitle="$article->localizedContent->title">
    <article>
        <h1>{{ $article->localizedContent->title }}</h1>
        <small>{{ $article->author->user->name }}</small>

        <div class="post-content mt-4">
            @foreach (explode(
        "
                         \n",
                         $article->localizedContent->body,
                )
                as $paragraph)
                @if (strlen($paragraph) > 0)
                    <p>{{ $paragraph }}</p>
                @endif
            @endforeach
        </div>
    </article>

    @canany(['update', 'delete'], $article)
        <div class="actions d-flex justify-content-between align-items-center">
            @can('update', $article)
                <a class="btn btn-primary"
                   href="/articles/{{ $article->id }}/modifier">{{ ucfirst(__('articles/show.updateButton')) }}</a>
            @endcan

            @can('delete', $article)
                <form action="{{ route('articles.destroy', $article->id) }}"
                      method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger"
                            href="/articles/{{ $article->id }}"
                            type="submit">{{ ucfirst(__('articles/show.deleteButton')) }}</button>
                </form>
            @endcan
        </div>
    @endcanany
</x-layouts.mainframe>
