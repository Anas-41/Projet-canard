<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/Canard.php';

class Emprunt {
    public static function creer($id_etudiant, $id_canard, $date_retour) {
        global $pdo;

        try {
            $pdo->beginTransaction();

            $stmt = $pdo->prepare("REPLACE INTO emprunter (id_canard, date_pret, date_retour, id_etudiant) VALUES (:id_canard, CURDATE(), :date_retour, :id_etudiant)");
            $stmt->execute([
                'id_canard' => $id_canard,
                'date_retour' => $date_retour,
                'id_etudiant' => $id_etudiant
            ]);

            Canard::updateEtat($id_canard, 'En vadrouille');

            $pdo->commit();
            return true;
        } catch (Exception $e) {
            $pdo->rollBack();
            return false;
        }
    }
}
?>