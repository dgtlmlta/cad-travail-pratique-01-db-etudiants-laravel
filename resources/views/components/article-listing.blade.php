<dl>
    @forelse ($articles as $article)
        <div>
            <dt>{{ $article->content(App::getLocale())->title }}</dt>
            <dd>
                {{ $article->content(App::getLocale())->body }}
            </dd>
        </div>
    @empty

    @endforelse
</dl>
