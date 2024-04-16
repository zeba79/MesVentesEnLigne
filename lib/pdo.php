<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=ventesannuelles;', 'root', '');
} catch (PDOException $e) {
    echo "erreur de connexion à la base de données" . $e->getMessage();
}
