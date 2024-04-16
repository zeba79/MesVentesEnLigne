<?php
function getProducts($pdo)
{
    $sql = 'SELECT * FROM produits';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $produits;
}
