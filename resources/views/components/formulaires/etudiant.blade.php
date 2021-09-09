<form action="{{ $action }}" method="POST">
    @csrf
    @method($method)
    
    <div class="form-group">
        <label for="inputNom">Nom :</label>
        <input class="form-control" type="text" id="inputNom" name="nom">
    </div>

    <div class="form-group">
        <label for="inputAdresse">Adresse :</label>
        <textarea class="form-control" id="inputAdresse" name="adresse"></textarea>
    </div>

    <div class="form-group">
        <label for="selectVille">Ville :</label>
        <select class="form-control" id="selectVille" name="ville">
            @foreach ($villes as $ville)
            <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="inputCourriel">Courriel :</label>
        <input class="form-control" type="email" id="inputCourriel" name="courriel">
    </div>
    
    <div class="form-group">
        <label for="inputTelephone">Téléphone :</label>
        <input class="form-control" type="phone" id="inputTelephone" name="telephone">
    </div>

    <div class="form-group">
        <label for="inputDdn">Date de naissance :</label>
        <input class="form-control" type="date" id="inputDdn" name="ddn">
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Soumettre</button>
    </div>
</form>