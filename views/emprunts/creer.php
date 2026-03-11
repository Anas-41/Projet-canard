<?php
require_once __DIR__ . '/../../models/Canards.php';
require_once __DIR__ . '/../../models/Etudiant.php';

$canards_dispos = Canard::getDisponibles();
$etudiants = Etudiant::getAll();
?>

<form action="../../controllers/EmpruntController.php" method="POST">
    <input type="hidden" name="action" value="adopter">

    <label for="id_canard">Canard :</label>
    <select name="id_canard" id="id_canard" required>
        <?php foreach ($canards_dispos as $c): ?>
            <option value="<?= htmlspecialchars($c['id_canard']) ?>">
                <?= htmlspecialchars($c['nom_canard']) ?> (<?= htmlspecialchars($c['type_canard']) ?>)
            </option>
        <?php endforeach; ?>
    </select>

    <label for="id_etudiant">Étudiant :</label>
    <select name="id_etudiant" id="id_etudiant" required>
        <?php foreach ($etudiants as $e): ?>
            <option value="<?= htmlspecialchars($e['id_etudiant']) ?>">
                <?= htmlspecialchars($e['prenom'] . ' ' . $e['nom']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="date_retour">Date de retour prévue :</label>
    <input type="date" name="date_retour" id="date_retour" required>

    <button type="submit">Adopter</button>
</form>