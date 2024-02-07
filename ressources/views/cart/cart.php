<!--liste les produits du panier.-->

<!DOCTYPE html>
<html lang="fr">
<h1>MA BOUTIQUE</h1>
<?php include("../ressources/views/layouts/head.php");
include("../ressources/views/layouts/header.php");
?>

<body>

<br>
<h3>Panier</h3>

<?php if (!empty($cart)) : ?>
    <?php foreach ($cart as $cartLine) : ?>
        <article>
            Produit : <?= $cartLine['id'] ?>
            /Quantité : <?= $cartLine['quantity'] ?>
            /Prix : <?= $cartLine['price'] ?>
            /Nom : <?= $cartLine['title'] ?>
            /Prix total : <?= $cartLine['totalPrice'] ?>
        </article>
    <?php endforeach ?>
<?php else : ?>
    Le panier est vide.
<?php endif; ?>


<?php if (isset($cartTotal)) : ?>
    <p> Total du panier : <?= $cartTotal['total'] ?> € </p>
    <p> Nombre de produits dans le panier : <?= $cartTotal['quantity'] ?> </p>
<?php endif; ?>

</body>
</html>








