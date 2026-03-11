<?php
require_once __DIR__ . '/../config/db.php';

class Etudiant {
    public static function getAll() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM Etudiants");
        return $stmt->fetchAll();
    }

    public static function creer($id_etudiant, $nom, $prenom, $mail) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO Etudiants (id_etudiant, nom, prenom, mail) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$id_etudiant, $nom, $prenom, $mail]);
    }
}
?>