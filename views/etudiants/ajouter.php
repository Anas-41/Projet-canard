<h1>Ajouter un Étudiant</h1>
<form action="controllers/EtudiantController.php" method="POST">
    <input type="hidden" name="action" value="ajouter">

    <label for="id_etudiant">Numéro de carte (ID) :</label>
    <input type="text" name="id_etudiant" id="id_etudiant" required><br><br>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required><br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required><br><br>

    <label for="mail">Email :</label>
    <input type="email" name="mail" id="mail" required><br><br>

    <button type="submit">Ajouter</button>
</form>