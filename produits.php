<?php
require_once './templates/header.php';
require_once './lib/pdo.php';
require_once './lib/tools.php';

$produits = getProducts($pdo);
?>

<div class="container">
    <h1 class="shadow-lg p-2 mb-3 mt-3 bg-body-tertiary rounded text-center">Tableau des ventes annuelles</h1>
    <table class="table table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Type</th>
      <th scope="col">Quantité</th>
      <th scope="col">Prix</th>
      <th scope="col">Total des ventes</th>
    </tr>
  </thead>
  <tbody>
      <?php
foreach ($produits as $key => $produit) {?>
    <tr>
        <th scope="row"><?=$produit['id'];?></th>
        <td><?=$produit['nom'];?></td>
        <td><?=$produit['type'];?></td>
        <td><?=$produit['quantite'];?></td>
        <td><?=$produit['prix'];?> €</td>
        <td class="text-center"><?=$produit['quantite'] * $produit['prix'];?> €</td>
    </tr>
<?php }?>
  </tbody>
</table>
</div>


<?php
require_once './templates/footer.php';
?>
