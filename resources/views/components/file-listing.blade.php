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

            <div class="file-item-actions">
                @can('update', $file)
                    <a class="btn btn-primary"
                       href="/files/{{ $file->id }}/modifier">{{ ucfirst(__('files/index.updateButton')) }}</a>
                @endcan

                @can('delete', $file)
                    <form action="{{ route('files.destroy', $file->id) }}"
                          method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger"
                                href="/files/{{ $file->id }}"
                                type="submit">{{ ucfirst(__('files/index.deleteButton')) }}</button>
                    </form>
                @endcan
            </div>
        </div>
    @empty
        <span>{{ __('files/index.noFileMessage') }}</span>
    @endforelse
</dl>
