<?php
require('../ressources/views/layouts/header.tpl.php'); ?>
    <h2>Bienvenue sur ma boutique !</h2>
    <!--Affichage d'un produit récupéré depuis le contrôleur-->
    <div>
        <img src="/img/product/<?= $product['id'] ?>.jpg" width="100"
             height="100">
        <br>
        <h3><?= $product['title']; ?></h3>
        <p><?= $product['description']; ?></p>
        <p>Prix: <?= $product['priceTTC']; ?>€ TTC</p>
    </div>
    <!--Ajouter au formulaire prix unitaire +  prix en fonction de la quantité + description-->
    <!--    Faire un fichier de traitement des données du formulaire-->
    <form action="/?action=cart&id=<?= $product['id'] ?>" method="POST">
        <p> Ajout de <?= $product['title']; ?> au panier : </p>
        <label for="quantity"> Merci de choisir la quantité voulue </label>
        <br>
        <!--Ajouter limite de quantité en fonction du stock -->
        <div>
            <input type="number" id="product" name="product" min="0" max="50">
        </div>
        <!--Afficher total -->
        <div class="button">
            <button type="submit">Ajouter au panier</button>
        </div>
    </form>
<?php require('../ressources/views/layouts/footer.tpl.php'); ?>