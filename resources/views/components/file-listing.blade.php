<dl>
    @forelse ($files as $file)
        <div class="mb-4">
            <dt>
                <picture>
                    <img src="{{ $previewImgUrl(Storage::mimeType($file->url)) }}"
                         alt="">
                </picture>
            </dt>

            <dd>
                <a href="/files/{{ $file->id }}">{{ $file->title }}</a>
            </dd>
        </div>
    @empty
        <span>{{ __('files/index.noFileMessage') }}</span>
    @endforelse
</dl>
