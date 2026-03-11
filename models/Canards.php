<?php
require_once __DIR__ . '/../config/db.php';

class Canard {
    public static function getAll() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM canard");
        return $stmt->fetchAll();
    }

    public static function getDisponibles() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM canard WHERE etat_canard = 'Dans la mare'");
        return $stmt->fetchAll();
    }

    public static function updateEtat($id_canard, $etat) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE canard SET etat_canard = :etat WHERE id_canard = :id_canard");
        return $stmt->execute(['etat' => $etat, 'id_canard' => $id_canard]);
    }
}
?>