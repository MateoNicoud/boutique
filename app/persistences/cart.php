<?php

// Fonction lié aux produits dans le panier
function initCart()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
}

//function fakeCart()
//{
//    $_SESSION['cart'] = [
//        1 => 3,
//        2 => 2,
//        3 => 4
//    ];
//}

function addProductCart($quantity, $product)
{
    $_SESSION['cart'][$product] = $quantity;
}


function subTotalCart(float $price, int $quantity)
{
    $subTotal = $price * $quantity;
    return $subTotal;
}

function totalCart(float $subTotal)
{
foreach ($subTotal as $amount) {
}
return $amount;
}
