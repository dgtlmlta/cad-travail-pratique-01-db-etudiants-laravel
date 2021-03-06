<form action="{{ $actionRoute }}"
      method="POST">
    @csrf
    @method($method)

    <div class="form-group">
        <label for="inputNom">{{ ucfirst(__('common.name')) }} :</label>
        <input class="form-control"
               type="text"
               id="inputNom"
               name="nom"
               @if ($etudiant) value="{{ $etudiant->user->name }}"@endif>
        @if ($errors->has('nom'))
            <span class="text-danger">{{ $errors->first('nom') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="inputAdresse">{{ ucfirst(__('common.address')) }} :</label>
        <textarea class="form-control"
                  id="inputAdresse"
                  name="adresse">@if ($etudiant){{ $etudiant->adresse }}@endif</textarea>
    </div>

    <div class="form-group">
        <label for="selectVille">{{ ucfirst(__('common.city')) }} :</label>
        <select class="form-control"
                id="selectVille"
                name="ville_id">
            <option value=""
                    disabled
                    selected>{{ __('etudiants/create.selectCityDefault') }}</option>
            @foreach ($villes as $ville)
                <option value="{{ $ville->id }}"
                        @if ($etudiant && $etudiant->ville_id == $ville->id) selected @endif>
                    {{ $ville->nom }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="inputCourriel">{{ ucfirst(__('common.email')) }} :</label>
        <input class="form-control"
               type="text"
               id="inputCourriel"
               name="courriel"
               @if ($etudiant) value="{{ $etudiant->user->email }}"@endif>
        @if ($errors->has('courriel'))
            <span class="text-danger">{{ $errors->first('courriel') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="inputPassword">{{ ucfirst(__('common.password')) }} :</label>
        <input class="form-control"
               type="password"
               id="inputPassword"
               name="password">
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="inputPasswordConfirmation">{{ ucfirst(__('common.password')) }} (confirmation):</label>
        <input class="form-control"
               type="password"
               id="inputPasswordConfirmation"
               name="password_confirmation">
    </div>

    <div class="form-group">
        <label for="inputTelephone">{{ ucfirst(__('common.phone')) }} :</label>
        <input class="form-control"
               type="phone"
               id="inputTelephone"
               name="telephone"
               @if ($etudiant) value="{{ $etudiant->telephone }}"@endif>
    </div>

    <div class="form-group">
        <label for="inputDdn">{{ ucfirst(__('common.dob')) }} :</label>
        <input class="form-control"
               type="date"
               id="inputDdn"
               name="ddn"
               @if ($etudiant) value="{{ $etudiant->ddn->format('Y-m-d') }}"@endif>
    </div>

    <div class="form-group">
        <button class="btn btn-primary"
                type="submit">{{ ucfirst(__('common.save')) }}</button>
    </div>
</form>
