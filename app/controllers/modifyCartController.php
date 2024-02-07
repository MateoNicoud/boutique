<?php
//include '../app/persistences/cartData.php';
if (isset($_POST)) {
    $quantite = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);
    foreach ($_SESSION['cart'] as $key => $value) {
        if (array_key_exists($key, $quantite)) {
            $_SESSION['cart'][$key]= $quantite["$key"];
        }
    }
    include '../app/controllers/cartController.php';
} else {
    include '../ressources/views/cart/index.php';
}