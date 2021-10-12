<dl>
    @forelse ($files as $file)
        <div class="mb-4">
            <dt>
                <picture>
                    <img src="{{ $previewImgUrl }}"
                         alt="">
                </picture>
            </dt>

            <small>{{ $file->author->user->name }}</small>

            <dd>
                <a href="{{ $file->url }}">{{ $file->title }}</a>
            </dd>
        </div>
    @empty
        <span>{{ __('files/index.noFileMessage') }}</span>
    @endforelse
</dl>
