<?php
//echo 'cart-';

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

function fakeCart()
{
    $_SESSION['cart'] = [
        1 => 3,
        2 => 2,
        3 => 4
    ];
}


//function totalCart($pdo, $id)
//{
//    $totalCartStmt = $pdo->query("SELECT id
//FROM products
//WHERE id=$id;");
//    return $allProductsStmt->fetchAll(PDO::FETCH_ASSOC);
//}

