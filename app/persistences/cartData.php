<?php


function countTotalProductInCatalog()
{
    (int)$nbTotalProduct = 0;
    return $nbTotalProduct;
}

function initCart($idArticleMax = 4)
{
//    on sélectionne tous les produits par leur id et ont les set à quantité =0
//    on compte le nombre total de produits
//    pour chaque produit on set $_Session
    $array = [];
    for ($i = 1; $i <= $idArticleMax; $i++) {
        $array[$i] = 1;
    }
    return $array;
}

function fakeCart(array $array, int $a, int $b, int $c)
{
//on sélectionne les 3 premiers produits
//on les met à quantité a,b,c
    $value_filled = [$a, $b, $c];
    for ($i = 1; $i <= min(count($array), count($value_filled)); $i++) {
        $array[$i] = $value_filled[($i - 1)];
    }
    return $array;

}

function totalCart(array $panier)
{
    $tot = 0;
    for ($i = 0; $i < count($panier)+1; $i++) {
        if (isset($panier[$i]['quantity'])) {
            $tot = $tot + (($panier[$i]['quantity']) * ($panier[$i]['priceTTC']));
        }
    }
    return $tot;
}

function cleanCart(array $cart)
{
    foreach ($cart as $key => $value) {
        if ((int)$value['quantity'] == 0) {
            unset($cart["$key"]);
        }
    }
    return $cart;
}

function cleanSessionCart(array $session_cart)
{
    foreach ($session_cart as  $key=>$value) {
        if ((int)$value == 0) {
            unset($session_cart["$key"]);
        }
    }
    return $session_cart;
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function updateProductCart(array $quantite,array $panier_array ){
    foreach ($panier_array as $key => $value) {
        if (array_key_exists($key, $quantite)) {
            $panier_array[$key] = $quantite["$key"];
        }
    }
    return $panier_array;
}