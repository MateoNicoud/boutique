<!-- MA VUE-->
<!---->
<!-- PAGE DU QUI RECUPERE LES INFOS POUR UN PRODUIT -->

<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php

include("../ressources/views/layouts/head.php")
?>
<div class="text-center"><h1>MA BOUTIQUE</h1></div>
<?php
include("../ressources/views/layouts/header.php");
?>
<body>
<main>
    <?php

    if (!isset($product)) : ?>
        <p>Aucun Article trouvé</p>
    <?php else : ?>
        <article>
            <?= $product ['id']; ?>
            <h2>
                <?= $product ['title']; ?>
            </h2>
            <p>
                <?= $product ['description']; ?>
            </p>
            <?= $product ['priceTTC']; ?>
            <?= $product ['weight']; ?>
            <?= $product ['tva']; ?>

            <?= $product ['stock']; ?>
            <?= $product ['categories_id']; ?>
            <?= $product ['tva_id']; ?>
            <?= $product ['price_HTT'] ?>
        </article>
    <?php endif; ?>
    <br>
    <form action="/?action=cart" method="post">
        <!-- Champ pour la quantité -->
        <label for="quantity">Quantité :</label>

        <input type="number" id="quantity" name="quantity" min="1" value="1" required>

        <!-- Bouton "Ajouter au panier" -->
        <button type="submit" name="submit">Ajouter au panier</button>
    </form>
    // Vérifiez si le formulaire a été soumis

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quantity'], $_POST['productId'])) {
    // Appel de la fonction pour ajouter le produit au panier
    addProductCart($_POST['productId'], $_POST['quantity']);
    }



    include("../ressources/views/layouts/footer.php");
    ?>
</main>
</body>
</html>
