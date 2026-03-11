<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'canards';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>La Canardothèque</title>
</head>
<body>
<nav>
    <a href="index.php?page=canards">Liste des Canards</a> |
    <a href="index.php?page=etudiants">Liste des Étudiants</a> |
    <a href="index.php?page=emprunter">Nouvel Emprunt</a>
</nav>
<hr>
<main>
    <?php
    switch ($page) {
        case 'canards':
            require __DIR__ . '/views/canards/liste.php';
            break;
        case 'ajouter_canard':
            require __DIR__ . '/views/canards/ajouter.php';
            break;
        case 'etudiants':
            require __DIR__ . '/views/etudiants/liste.php';
            break;
        case 'ajouter_etudiant':
            require __DIR__ . '/views/etudiants/ajouter.php';
            break;
        case 'emprunter':
            require __DIR__ . '/views/emprunts/creer.php';
            break;
        default:
            require __DIR__ . '/views/canards/liste.php';
            break;
    }
    ?>
</main>
</body>
</html>