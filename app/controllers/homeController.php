<?php
session_start();
echo 'homeController';
// Utilisation de la BDD
require_once ('../app/persistences/product.php');

// Appel fonction pour afficher tous les produits
$showProducts = getAllProducts ($pdo);

// Utilisation de la template d'affichage des produits
require ('../ressources/views/home.php');