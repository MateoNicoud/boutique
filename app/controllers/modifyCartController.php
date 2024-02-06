<?php
//include '../app/persistences/cartData.php';
echo 'le modifyCartController se charge';
var_dump($_POST);
var_dump($_SESSION['cart']);
if (isset($_POST)) {
    $idArticles = filter_input(INPUT_GET, 'id');
    $quantite = filter_input(INPUT_POST, 'quantity');

//    $_SESSION['cart'] = array_replace($_SESSION['cart'], [(int)$productAsked['id'] => $_SESSION['cart'][(int)$productAsked['id']] ]);

} else {
    include '../ressources/views/cart/index.php';
}