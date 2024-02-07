<?php
global $pdo;
include('../app/persistences/cart.php');
include('../app/persistences/product.php');

initCart();

$cart = [];
foreach ($_SESSION['cart'] as $sessionCartLine) {
    $Id = $sessionCartLine['id'];
    $product = getProduct($pdo, $Id);

    $cart[]= [
        'id' => $Id,
        'title' => $product['title'],
        'price' => $product['priceTTC'],
        'quantity' => $sessionCartLine['quantity'],
        'totalPrice' => ($product['priceTTC'] * $sessionCartLine['quantity']),
    ];
}


include("../ressources/views/cart/cart.php");


//$cartTotal=totalCart($pdo,$_SESSION['cart']);


include("../ressources/views/layouts/footer.php");
