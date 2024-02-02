<?php
session_start();
echo 'cartController';
// Emplacement des fonctions
require_once ('../app/persistences/product.php');

// Récupération de la quantité depuis form
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);

// Appel de la fonction qui affiche le contenu du panier
$_SESSION = productInCart ($pdo, $quantity);

// Utilisation de la template d'affichage du produit
require ('../ressources/views/product/show.php');