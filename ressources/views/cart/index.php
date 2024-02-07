<?php
echo 'cart/index.php';
require('../ressources/views/layouts/header.tpl.php'); ?>


<!-- Affichage des produits du panier-->
<h2> Voici votre panier </h2>

<table>
    <thead>
    <tr>
        <th scope="col"> Panier</th>
        <th scope="col"> Produit</th>
        <th scope="col">Prix Unitaire</th>
        <th scope="col">Quantité</th>
        <th scope="col">Sous-Total</th>
    </tr>
    </thead>
    <tbody>
    <!--     Todo :  foreach de sous total et total, boucle foreach dans fonction-->
    <?php foreach ($_SESSION['cart'] as $product => $quantity) : ?>
        <?php var_dump(getProduct($pdo,$product)); ?>
        <tr>
            <td><img src="../img/product/<?= getProduct($pdo, $product)['id'] ?>.jpg" width="50"
                     height="50">
            </td>
            <td><?= getProduct($pdo, $product)  ['title']?> </td>
            <td> <?= getProduct($pdo, $product)  ['priceTTC']?> </td>
            <td> <?= $quantity ?> </td>
            <td><?= subTotalCart(getProduct($pdo, $product)  ['priceTTC'], $quantity);?> </td>
            <?php endforeach; ?>
        </tr>

    </tbody>
    <tfoot>

        <th scope="row" colspan="4"><?= $total = totalCart(subTotalCart()); ?></th>

    </tfoot>
</table>
<form action="/?action=pay" method="POST" onSubmit="alert('Etes-vous sûr(e)?')">
    <input name="edit_cmd" type="submit" value="Modifier ma commande"/>
    <input name="valid_cmd" type="submit" value="Valider ma commande"/>
</form>

<?php require('../ressources/views/layouts/footer.tpl.php'); ?>
