<dl>
    @forelse ($articles as $article)
        <div class="mb-4">
            <dt>{{ $article->localizedContent->title}}</dt>
            <dd>
                {{ Str::words($article->localizedContent->body, 20, "...") }}
            </dd>
        </div>
    @empty

    @endforelse
</dl>
