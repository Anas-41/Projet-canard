<?php
require_once '../../models/Canards.php';
$canards = Canard::getAll();
?>
<h1>Liste des Canards</h1>
<a href="index.php?page=ajouter_canard">Ajouter un canard</a>
<br><br>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Type</th>
        <th>État</th>
        <th>Action</th>
    </tr>
    <?php foreach ($canards as $c): ?>
        <tr>
            <td><?= htmlspecialchars($c['id_canard']) ?></td>
            <td><?= htmlspecialchars($c['nom_canard']) ?></td>
            <td><?= htmlspecialchars($c['type_canard']) ?></td>
            <td><?= htmlspecialchars($c['etat_canard']) ?></td>
            <td>
                <?php if ($c['etat_canard'] === 'Dans la mare'): ?>
                    <a href="index.php?page=emprunter&id_canard=<?= urlencode($c['id_canard']) ?>">Adopter</a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>