<?php
require_once 'connexion.php';

// Définir le header pour JSON
header('Content-Type: application/json; charset=utf-8');

// Récupérer tous les utilisateurs
$stmt = $pdo->query("SELECT * FROM utilisateurs");
$utilisateurs = $stmt->fetchAll();

echo json_encode($utilisateurs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
