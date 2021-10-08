<dl>
    @forelse ($articles as $article)
        <div>
            <dt>{{ $article->localizedContent->title}}</dt>
            <dd>
                {{ $article->localizedContent->body }}
            </dd>
        </div>
    @empty

    @endforelse
</dl>
