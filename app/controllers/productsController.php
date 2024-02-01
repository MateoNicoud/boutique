<?php
// Utilisation de la BDD
require_once ('../app/persistances/productsData.php');

// Appel fonction pour afficher 1 produit
$showProduct = detailsProduct ($pdo);

// Utilisation de la template d'affichage du produit
require ('../ressources/views/product/show.php');