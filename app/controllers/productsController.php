<?php
// Utilisation de la BDD
require_once ('../app/persistences/productsData.php');

// Appel fonction pour afficher 1 produit
$getProduct = detailsProduct ($pdo);

// Utilisation de la template d'affichage du produit
require ('../ressources/views/product/show.php');