<form action="{{ $action }}">
    <div>
        <label for="inputNom">Nom :</label>
        <input type="text" id="inputNom" name="nom">
    </div>

    <div>
        <label for="inputAdresse">Adresse :</label>
        <textarea id="inputAdresse" name="adresse"></textarea>
    </div>

    <div>
        <label for="inputCourriel">Courriel :</label>
        <input type="email" id="inputCourriel" name="courriel">
    </div>
    
    <div>
        <label for="inputTelephone"></label>
        <input type="phone" id="inputTelephone" name="telephone">
    </div>

    <div>
        <label for="inputDdn"></label>
        <input type="date" id="inputDdn" name="ddn">
    </div>

    <div>
        <label for="selectVille"></label>
        <select id="selectVille" name="ville">
            
        </select>
    </div>
</form>