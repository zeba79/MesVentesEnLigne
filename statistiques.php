<?php
require_once './lib/pdo.php';
require_once './lib/tools.php';
require_once './templates/header.php';

$totalDesVentes = getTotalDesVentes($pdo);
$moyenneDesVentes = getMoyenneDesVentes($pdo);
$nbreArticlesVendus = getNbreArticlesVendus($pdo);
$prixMoyen = getPrixMoyen($pdo);
$prixMini = getPrixMini($pdo);
$prixMaxi = getPrixMaxi($pdo);
$venteParTypeDeProduit = getVenteParTypeDeProduit($pdo);
?>

<div class="container">
    <h1 class="shadow-lg p-2 mb-3 mt-3 bg-body-tertiary rounded text-center">Statistiques</h1>
 <table class="table">
            <tr>
                <th scope="col">Total des ventes</th>
                <td><?=$totalDesVentes['totalDesVentes'];?> €</td>
            </tr>
            <tr>
                <th scope="col">Moyenne des ventes annuelles</th>
                <td><?=$moyenneDesVentes['moyenneDesVentes'];?> €</td>
            </tr>
                <th scope="col">Nombre d'articles vendus</th>
                <td><?=$nbreArticlesVendus['nbreArticlesVendus'];?></td>
            <tr>
                <th scope="col">Prix moyen</th>
                <td><?=$prixMoyen['prixMoyen'];?> €</td>
            </tr>
            <tr>
                <th scope="col">Prix maxi</th>
                <td><?=$prixMaxi['prixMaxi'];?> €</td>
                </tr>
            <tr>
                <th scope="col">Prix mini</th>
                <td><?=$prixMini['prixMini'];?> €</td>

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
</table>
</div>

<?php
require_once './templates/footer.php';
?>
