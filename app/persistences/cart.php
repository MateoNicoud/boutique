<?php

// Une fonction “initCart” qui initialise le panier

function initCart()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
        //fakeCart();
    }
}

//◆ Une fonction “fakeCart” qui peuple le panier avec des données de test


function fakeCart()
{
    $_SESSION['cart'] = [
        0 => array('id' => 1, 'quantity' => 0),
        1 => array('id' => 3, 'quantity' => 0),
        2 => array('id' => 2, 'quantity' => 0),

    ];
}


//◆ Une fonction “totalCart” qui retourne un array avec le total en € du panier et le nombre de produits pour l’afficher dans le header du site.


//
function totalCart($pdo, array $cart): array
{
    $total = 0;
    $quantity = 0;
    foreach ($cart as $cartLine) {
        $price = getProduct($pdo, $Id);
        $total += $price * $quantity;
        $quantity += $quantity;
    }
    return ['total' => $total, 'quantity' => $quantity];
}

//➔ Une fonction “addProductCart” qui permet d’ajouter un produit au panier avec sa quantité
function addProductCart()
{

}
