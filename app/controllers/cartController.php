<?php

echo 'cartController-';
// Emplacement des fonctions
require_once('../app/persistences/cart.php');
require_once('../app/persistences/product.php');

// Initialisation du panier
initCart();
fakeCart();


$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
//echo 'quantité : ' .$quantity;

$product = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
//echo 'produit : ' .$product;

//Todo :  récupérer prix et title de produit pour chaque id du panier en session

$cart = [
//    [
//         'id' => '',
//        'title' => 2,
//        'price' => 20.50,
//        'quantity' => 41,00
//        'amount' => 41,00
//    ],
];
foreach ($_SESSION['cart'] as $id => $quantity) {
    $product = getProduct($pdo, $id);
    $cart[] = [
        'id' => $id,
        'title' => $product['title'],
        'price' => $product['priceTTC'],
        'quantity' => $quantity,
        'amount' => ($product['priceTTC'] * $quantity),
    ];
}

//// Affiche le prix total
//$allproducts = totalCart($pdo, $id);
//$total = 0;
//foreach ($allproducts as $product) ;
//{
//    $total += $product ['price'] * $product['quantity'];
//}
//return $total;

// Utilisation de la template d'affichage du produit
require('../ressources/views/cart/index.php');
