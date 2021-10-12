<dl class="file-listing">
    @forelse ($files as $file)
        <div class="file-item">
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
