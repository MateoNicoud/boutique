<?php
global $pdo;
include "../app/persistences/product.php";
include "../app/persistences/cart.php";
/*for ($i = 1; $i <= count($_SESSION["cart"]["products_id"]); $i++) {
    $article[$i] = bdCart($pdo, $i);
}*/


global $pdo;
if (isset($_POST["getId"])) {
    $productSelected = $_POST["getId"];
    addProductCart($productSelected);
}
if (!empty($_SESSION["cart"]["products_id"])) {
    for ($i = 1; $i <= max($_SESSION["cart"]["products_id"]); $i++) {
        if (isset($_SESSION["cart"]["products_id"][$i])) {
            $article[$i] = bdCart($pdo,$i);
        }
    }

$totalCart = totalCart($article);
$amountArticleInCart = amountArticleInCart();

}

$allProducts = getAllProducts($pdo);
include "../ressources/views/layouts/header.php";
include "../ressources/views/home.php";
include "../ressources/views/layouts/footer.php";