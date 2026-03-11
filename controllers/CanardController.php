<?php
require_once __DIR__ . '/../models/Canard.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'ajouter') {
    $id_canard = isset($_POST['id_canard']) ? $_POST['id_canard'] : '';
    $nom_canard = isset($_POST['nom_canard']) ? $_POST['nom_canard'] : '';
    $type_canard = isset($_POST['type_canard']) ? $_POST['type_canard'] : '';
    $etat_canard = isset($_POST['etat_canard']) ? $_POST['etat_canard'] : '';

    if (!empty($id_canard) && !empty($nom_canard) && !empty($type_canard) && !empty($etat_canard)) {
        Canard::creer($id_canard, $nom_canard, $type_canard, $etat_canard);
        header('Location: ../index.php?page=canards');
        exit;
    }
}
?>