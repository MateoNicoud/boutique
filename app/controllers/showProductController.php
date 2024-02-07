<?php
global $pdo;
/******************
 * Ecrire URL : http://boutique.local/?action=boutiqueProductController&id=1 (on peut change rle 1 avec
 * d'autre chiffre selon le nombre d'articles créer dans la BDD.
 ********************************/

include '/var/www/boutique/app/persistences/product.php';

$Id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$product = getProduct($pdo, $Id);

include '../ressources/views/product/show.php';


