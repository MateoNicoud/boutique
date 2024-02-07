<?php
global $pdo, $getId;
include "../app/persistences/product.php";
include "../app/persistences/cart.php";
/*for ($i=1;$i<=count($_SESSION["cart"]["products_id"]);$i++){
    $article[$i]=bdCart($pdo,$i);
}*/


/*global $pdo;
if (isset($_POST["getId"])) {
    $productSelected = $_POST["getId"];
    addProductCart($productSelected);
}
if (!empty($_SESSION["cart"]["products_id"])) {
    for ($i = 1; $i <= max($_SESSION["cart"]["products_id"]); $i++) {
        if (isset($_SESSION["cart"]["products_id"][$i])) {
            $article[$i] = bdCart($pdo,$i);
            if(isset($_POST["id".$i])){
                $id=$_POST["id".$i];
                //var_dump($_POST["id".$i]);
                updateProductCart($id);
            }
        }
    }
 $totalCart = totalCart($article);
    $amountArticleInCart = amountArticleInCart();
}
*/

$products = getProduct($pdo,$getId);
global $products;
include"../ressources/views/layouts/header.php";
include "../ressources/views/product/show.php";
include"../ressources/views/layouts/footer.php";