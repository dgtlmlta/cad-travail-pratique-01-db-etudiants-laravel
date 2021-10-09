<dl>
    @forelse ($articles as $article)
        <div class="mb-4">
            <dt><a href="/articles/{{ $article->id }}">{{ $article->localizedContent->title}}</a></dt>

            <small>{{ $article->author->user->name }}</small>

            <dd>
                {{ Str::words($article->localizedContent->body, 20, "...") }}
            </dd>
        </div>
    @empty
        <span>{{ __("articles/index.noPostsMessage") }}</span>
    @endforelse
</dl>
