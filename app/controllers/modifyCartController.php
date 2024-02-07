<?php
include_once '../app/persistences/cartData.php';

if (isset($_POST)) {
    $quantite = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);
    $_SESSION['cart']=updateProductCart($quantite,$_SESSION['cart']);
    header("Location:/?action=cart");
    include '../app/controllers/cartController.php';

} else {
    include '../ressources/views/cart/index.php';
}