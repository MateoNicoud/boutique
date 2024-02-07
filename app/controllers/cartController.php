<?php
global $mysqlClient;

require_once '../app/persistences/cartData.php';
require_once '../app/persistences/productData.php';


$cart = [];
foreach ($_SESSION['cart'] as $id => $quantity) {
    $product = getProduct($mysqlClient, $id);
    $cart[] = [
        'id' => $id,
        'title' => $product['title'],
        'quantity' => $quantity,
        'priceTTC' => $product['priceTTC'],
    ];
};
$cart = cleanCart($cart);
$total = totalCart($cart);
include '../ressources/views/cart/index.php';
//}