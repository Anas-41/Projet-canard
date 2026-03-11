<?php
require_once __DIR__ . '/../models/Etudiant.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'ajouter') {
    $id_etudiant = isset($_POST['id_etudiant']) ? $_POST['id_etudiant'] : '';
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $mail = isset($_POST['mail']) ? $_POST['mail'] : '';

    if (!empty($id_etudiant) && !empty($nom) && !empty($prenom) && !empty($mail)) {
        Etudiant::creer($id_etudiant, $nom, $prenom, $mail);
        header('Location: ../index.php?page=etudiants');
        exit;
    }
}