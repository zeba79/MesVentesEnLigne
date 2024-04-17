<?php
function getProducts($pdo)
{
    $sql = 'SELECT * FROM produits';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $produits;
}

function getTotalDesVentes($pdo)
{
    $sql = 'SELECT CEIL(SUM(quantite*prix)) as totalDesVentes FROM produits';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $totalDesVentes = $stmt->fetch(PDO::FETCH_ASSOC);
    return $totalDesVentes;
}

function getMoyenneDesVentes($pdo)
{
    $sql = 'SELECT CEIL(AVG(quantite*prix)) as moyenneDesVentes FROM produits';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $moyenneDesVentes = $stmt->fetch(PDO::FETCH_ASSOC);
    return $moyenneDesVentes;
}

function getNbreArticlesVendus($pdo)
{
    $sql = 'SELECT SUM(quantite) as nbreArticlesVendus FROM produits';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $nbreArticlesVendus = $stmt->fetch(PDO::FETCH_ASSOC);
    return $nbreArticlesVendus;
}

function getPrixMoyen($pdo)
{
    $sql = 'SELECT CEIL(AVG(prix)) as prixMoyen FROM produits';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $prixMoyen = $stmt->fetch(PDO::FETCH_ASSOC);
    return $prixMoyen;
}

function getPrixMini($pdo)
{
    $sql = 'SELECT MIN(prix) as prixMini FROM produits';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $prixMini = $stmt->fetch(PDO::FETCH_ASSOC);
    return $prixMini;
}

function getPrixMaxi($pdo)
{
    $sql = 'SELECT MAX(prix) as prixMaxi FROM produits';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $prixMaxi = $stmt->fetch(PDO::FETCH_ASSOC);
    return $prixMaxi;
}

function getVenteParTypeDeProduit($pdo)
{
    $sql = 'SELECT type,  SUM(quantite*prix) FROM produits GROUP BY type';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $venteParTypeDeProduit = $stmt->fetchAll();
    return $venteParTypeDeProduit;
}
