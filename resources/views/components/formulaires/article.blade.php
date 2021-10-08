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
               @if ($article) value="{{ $article->localizedContent->title }}"@endif>
        @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="inputBody">{{ ucfirst(__('common.body')) }} :</label>
        <textarea class="form-control"
                  id="inputBody"
                  name="adresse">@if ($article){{ $article->localizedContent->body }}@endif</textarea>
    </div>

    <div class="form-group">
        <label for="selectLocale">{{ ucfirst(__('common.language')) }} :</label>
        <select class="form-control"
                id="selectLocale"
                name="locale_id">
            <option value=""
                    disabled
                    selected>{{ __('articles/create.selectLocaleDefault') }}</option>
            @foreach (config("app.available_locales") as $locale => $label)
                <option value="{{ $locale }}"
                        @if ($article && $locale == App::getLocale()) selected @endif>
                    {{ $label }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <button class="btn btn-primary"
                type="submit">{{ ucfirst(__('common.save')) }}</button>
    </div>
</form>
