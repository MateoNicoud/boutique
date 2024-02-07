<?php
global $pdo;
include "../app/persistences/product.php";
include "../app/persistences/cart.php";
/*for ($i = 1; $i <= count($_SESSION["cart"]["products_id"]); $i++) {
    $article[$i] = bdCart($pdo, $i);
}*/




$allProducts = getAllProducts($pdo);
include "../ressources/views/layouts/header.php";
include "../ressources/views/home.php";
include "../ressources/views/layouts/footer.php";