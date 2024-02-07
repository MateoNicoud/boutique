<?php

// Emplacement des fonctions
require_once('../app/persistences/cart.php');
require_once('../app/persistences/product.php');

// Initialisation du panier
initCart();
//fakeCart();


// Todo : récupérer quantité et nom du produit pour compléter le panier

$quantity = (int) filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);


$product = (int) filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);


//Todo :  récupérer prix et title de produit pour chaque id du panier en session
addProductCart($quantity,$product);

var_dump($_SESSION);


require('../ressources/views/cart/index.php');
