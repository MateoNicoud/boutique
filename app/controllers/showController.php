<?php
global $pdo, $getId;
include "../app/persistences/product.php";
include "../app/persistences/cart.php";
for ($i=1;$i<=count($_SESSION["cart"]["products_id"]);$i++){
    $article[$i]=bdCart($pdo,$i);
}
$totalCart = totalCart($article);
$amountArticleInCart = amountArticleInCart();
$products = getProduct($pdo,$getId);
global $products;
include"../ressources/views/layouts/header.php";
include "../ressources/views/product/show.php";
include"../ressources/views/layouts/footer.php";