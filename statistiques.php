<?php
require_once './templates/header.php';

$sql = 'SELECT SUM(prix) FROM products'
?>
<div class="container">
    <h1 class="shadow-lg p-2 mb-3 mt-3 bg-body-tertiary rounded text-center">Statistiques</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Type</th>
      <th scope="col">Quantité</th>
      <th scope="col">Prix</th>
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
</tr>
<?php }?>
  </tbody>
</table>
</div>

<?php
require_once './templates/footer.php';
?>
