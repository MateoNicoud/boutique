<?php
require('../ressources/views/layouts/header.tpl.php'); ?>
<!--Ajouter menu et photo produit-->

<h3> Voici nos produits disponibles </h3>

<?php foreach ($showProducts as $product): ?>
    <div>
        <a href="/?action=product&id=<?= $product['id'] ?>">
            <h3><?= $product['title']; ?></h3>
            <img src="img/product/<?=$product['id'] ?>.jpg "   width="150"
                 height="150">
            <br>
            <p><?= $product['description']; ?></p>
            <p>Prix: <?= $product['priceTTC']; ?>€ TTC</p>

    </div>
<?php endforeach; ?>
<br>

<?php require('../ressources/views/layouts/footer.tpl.php'); ?>
