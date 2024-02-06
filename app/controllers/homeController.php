<?php
global $pdo;

// Utilisation de la BDD
require_once ('../app/persistences/product.php');

// Appel fonction pour récuppérer tous les produits
$showProducts = getAllProducts ($pdo);

// Utilisation de la template d'affichage des produits
require ('../ressources/views/home.php');