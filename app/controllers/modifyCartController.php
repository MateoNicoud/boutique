<?php
//include '../app/persistences/cartData.php';

if (isset($_POST)) {
    $quantite = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);
    var_dump($quantite);
    var_dump($_SESSION['cart']);
    foreach ($_SESSION['cart'] as $key => $value) {
        if (array_key_exists($key, $quantite)) {
            $_SESSION['cart'][$key]= $quantite["$key"];
        }
    }
    var_dump($_SESSION['cart']);
    include '../app/controllers/cartController.php';
} else {
    include '../ressources/views/cart/index.php';
}