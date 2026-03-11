



<?php
// config/db.php
$dsn = 'mysql:host=localhost;port=3306;dbname=projet_canards;charset=utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, 'root', 'root', $options);
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}