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
    <?php foreach ($cart as $cartLine) : ?>
        <tr>
            <td><img src="../img/product/<?= $cartLine ['id'] ?>.jpg" width="50"
                     height="50" >
            </td>
            <td><?= $cartLine ['title']?> </td>
            <td> <?= $cartLine ['price']?> </td>
            <td> <?= $cartLine ['quantity']?> </td>
            <td><?= $cartLine ['amount']?> </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    <tfoot>
    <th scope="row" colspan="4">Total</th>
    </tfoot>
</table>


<?php require('../ressources/views/layouts/footer.tpl.php'); ?>
