<?php
require ('../ressources/views/layouts/header.tpl.php'); ?>

   <h1>Bienvenue sur ma boutique !</h1>

<!--Affichage des produits récupérés depuis le contrôleur-->

    <?php foreach ($showProduct as $product): ?>
        <div>
            <h2><?= $product['title']; ?></h2>
            <p><?= $product['description']; ?></p>
            <p>Prix: <?= $product['priceTTC']; ?> €</p>
        </div>
    <?php endforeach; ?>

<!--Ajouter au formulaire prix unitaire +  prix en fonction de la quantité + description-->
<!--    Faire un fichier de traitement des données du formulaire-->
    <form action="traitement.php" method="POST">
        <p> Ajout d'un produit au panier </p>
        <div>
            <label for="title"> Nom </label>
            <input type ="text" id="title" name="title"/> <br>
        </div>
        <div>
            <label for="amount"> Quantité </label>
            <textarea id="quantity" name="amount"></textarea>
        </div>

        <div class="button">
            <button type="submit">Ajouter au panier</button>
        </div>
    </form>

<?php require ('../ressources/views/layouts/footer.tpl.php'); ?>