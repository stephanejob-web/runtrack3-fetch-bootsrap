<?php
$host = '127.0.0.1'; 
$port = 8889;         
$db   = 'utilisateurs';
$user = 'root';
$pass = 'root';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // erreurs en exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // option sûre par défaut
        PDO::ATTR_EMULATE_PREPARES   => false,                  // vraies requêtes préparées
    ]);
} catch (PDOException $e) {
    // en dev : affiche l'erreur ; en prod, log et message générique
    exit("Erreur de connexion PDO: " . htmlspecialchars($e->getMessage()));
}
