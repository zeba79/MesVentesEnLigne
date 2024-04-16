<?php
require_once './lib/pdo.php';
require_once './templates/header.php';

$sql = 'SELECT CEIL(SUM(quantite*prix)) FROM produits';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$totalDesVentes = $stmt->fetch();

$sql = 'SELECT CEIL(AVG(quantite*prix)) FROM produits';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$moyenneDesVentes = $stmt->fetch();

$sql = 'SELECT SUM(quantite) FROM produits';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$nbreArticlesVendus = $stmt->fetch();

$sql = 'SELECT CEIL(AVG(prix)) FROM produits';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$prixMoyen = $stmt->fetch();

$sql = 'SELECT MIN(prix) FROM produits';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$prixMini = $stmt->fetch();

$sql = 'SELECT MAX(prix) FROM produits';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$prixMaxi = $stmt->fetch();

$sql = 'SELECT type,  SUM(quantite*prix) FROM produits GROUP BY type';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$venteParTypeDeProduit = $stmt->fetchAll();
var_dump($venteParTypeDeProduit);

// $sql = 'SELECT SUM(prix) FROM products'
?>
<div class="container">
    <h1 class="shadow-lg p-2 mb-3 mt-3 bg-body-tertiary rounded text-center">Statistiques</h1>
 <table class="table">
    <tbody>
        <thead>
            <thead></thead>
            <tr>
                <th scope="col">Total des ventes</th>
                <td><?=$totalDesVentes[0];?> €</td>
            </tr>
            <tr>
                <th scope="col">Total des ventes</th>
                <td><?=$totalDesVentes[0];?> €</td>
            </tr>
            <tr>
                <th scope="col">Moyenne des ventes</th>
                <td><?=$moyenneDesVentes[0];?> €</td>
            </tr>
                <th scope="col">Nombre d'articles vendus</th>
                <td><?=$nbreArticlesVendus[0];?></td>
            <tr>
                <th scope="col">Prix moyen</th>
                <td><?=$prixMoyen[0];?> €</td>
            </tr>
            <tr>
                <th scope="col">Prix maxi</th>
                <td><?=$prixMaxi[0];?> €</td>
                </tr>
            <tr>
                <th scope="col">Prix mini</th>
                <td><?=$prixMini[0];?> €</td>

            </tr>
            <tr>
                <th scope="col">Vente par type</th>
            </tr>
                <?php
foreach ($venteParTypeDeProduit as $key => $typeDeProduit) {?>
            <tr>
                <th><?=$typeDeProduit[0];?></th>
                <td><?=$typeDeProduit[1];?></td>
            </tr>
                <?php }?>
        </thead>
    </tbody>
</table>
</div>

<?php
require_once './templates/footer.php';
?>
