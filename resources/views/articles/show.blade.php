<article>
    <h1>{{ $article->localizedContent->title }}</h1>
    <small>{{ $article->author->user->name }}</small>

    <div class="post-content">
        @foreach (explode(
                    "\n",
                    $article->localizedContent->body) as $paragraph)
            <p>{{ $paragraph }}</p>
        @endforeach
    </div>
</article>
