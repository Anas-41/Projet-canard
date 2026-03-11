<?php
require_once __DIR__ . '/../../models/Etudiant.php';
$etudiants = Etudiant::getAll();
?>
<h1>Liste des Étudiants</h1>
<a href="index.php?page=ajouter_etudiant">Ajouter un étudiant</a>
<br><br>
<table border="1">
    <tr>
        <th>ID Étudiant</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
    </tr>
    <?php foreach ($etudiants as $e): ?>
        <tr>
            <td><?= htmlspecialchars($e['id_etudiant']) ?></td>
            <td><?= htmlspecialchars($e['nom']) ?></td>
            <td><?= htmlspecialchars($e['prenom']) ?></td>
            <td><?= htmlspecialchars($e['mail']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>