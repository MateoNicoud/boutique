<?php
echo 'productsController';

// Utilisation de la BDD
require_once ('../app/persistences/product.php');

//Récupération de l'id produit dans l'URL
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);
echo 'id : ' .$id;

// Appel fonction pour afficher 1 produit
$detailsProduct = getProduct ($pdo,$id);

// Utilisation de la template d'affichage du produit
require ('../ressources/views/product/show.php');