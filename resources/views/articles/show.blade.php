<x-layouts.mainframe :pageTitle="$article->localizedContent->title">
    <article>
        <h1>{{ $article->localizedContent->title }}</h1>
        <small>{{ $article->author->user->name }}</small>

        <div class="post-content mt-4">
            @foreach (explode(
                        "\n",
                        $article->localizedContent->body) as $paragraph)
                @if (strlen($paragraph) > 0)
                    <p>{{ $paragraph }}</p>
                @endif
            @endforeach
        </div>
    </article>
</x-layouts.mainframe>
