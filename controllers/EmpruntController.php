<?php
require_once __DIR__ . '/../models/Emprunt.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'adopter') {
    $id_etudiant = $_POST['id_etudiant'] ?? '';
    $id_canard = $_POST['id_canard'] ?? '';
    $date_retour = $_POST['date_retour'] ?? '';

    if (!empty($id_etudiant) && !empty($id_canard) && !empty($date_retour)) {
        Emprunt::creer($id_etudiant, $id_canard, $date_retour);
        header('Location: ../index.php?page=canards');
        exit;
    }
}
?>