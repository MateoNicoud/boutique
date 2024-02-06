<?php
//include '../app/persistences/cartData.php';
/*echo 'le modifyCartController se charge';
var_dump($_POST);
var_dump($_SESSION['cart']);*/
if (isset($_POST)) {
    $idArticles = filter_input(INPUT_GET, 'id');
    $quantity = filter_input(INPUT_POST, 'quantity');
    if(!isset($_SESSION['cart'][$idArticles]))$_SESSION['cart'][$idArticles]=0;
    $_SESSION['cart'][$idArticles] += (int)$quantity;
    if($_SESSION['cart'][$idArticles] <=0){
        unset($_SESSION['cart'][$idArticles]);
    }
    header('Location: /?action=cart');
}