<dl>
    @forelse ($articles as $article)
        @if($article->localizedContent)
        <div class="mb-4">
            <dt>{{ $article->localizedContent->title}}</dt>
            <dd>
                {{ Str::words($article->localizedContent->body, 20, "...") }}
            </dd>
        </div>
        @endif
    @empty

    @endforelse
</dl>
