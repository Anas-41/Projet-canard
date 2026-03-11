<h1>Ajouter un Canard</h1>
<form action="controllers/CanardController.php" method="POST">
    <input type="hidden" name="action" value="ajouter">

    <label for="id_canard">ID Canard :</label>
    <input type="text" name="id_canard" id="id_canard" required><br><br>

    <label for="nom_canard">Nom :</label>
    <input type="text" name="nom_canard" id="nom_canard" required><br><br>

    <label for="type_canard">Type :</label>
    <select name="type_canard" id="type_canard" required>
        <option value="Plastique">Plastique</option>
        <option value="Peluche">Peluche</option>
        <option value="Bouée">Bouée</option>
    </select><br><br>

    <label for="etat_canard">État :</label>
    <select name="etat_canard" id="etat_canard" required>
        <option value="Dans la mare">Dans la mare</option>
        <option value="En vadrouille">En vadrouille</option>
        <option value="En nettoyage">En nettoyage</option>
    </select><br><br>

    <button type="submit">Ajouter</button>
</form>