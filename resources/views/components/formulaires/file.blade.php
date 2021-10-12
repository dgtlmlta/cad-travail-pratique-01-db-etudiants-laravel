<form action="{{ $actionRoute }}"
      method="POST">
    @csrf
    @method($method)

    <div class="form-group">
        <label for="inputTitle">{{ ucfirst(__('common.title')) }} :</label>
        <input class="form-control"
               type="text"
               id="inputTitle"
               name="title"
               value="{{ old('title') !== null ? old('title') : ($file !== null ? $file->title : '') }}">
        @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="inputFileUpload">{{ ucfirst(__('common.file')) }} :</label>
        <input class="form-control-file"
               type="file"
               name="fileUpload"
               id="inputFileUpload">
        @if ($errors->has('body'))
            <span class="text-danger">{{ $errors->first('body') }}</span>
        @endif
    </div>

    <div class="form-group">
        <button class="btn btn-primary"
                type="submit">{{ ucfirst(__('common.save')) }}</button>
    </div>
</form>
