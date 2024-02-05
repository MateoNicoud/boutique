<?php
for ($i = 0; $i < count($allProducts); $i++) {
    ?>
    <br>
    <h3><?= $allProducts[$i]["title"] ?></h3>
    <span><?= $allProducts[$i]["description"] ?></span>
    <br>
    <span>Price : <?= $allProducts[$i]["priceTTC"] ?>€</span>
    <br>
    <a href="http://boutique.local/index.php?action=product&id=<?= $allProducts[$i]["id"] ?>">Product page</a>
    <?php
}
