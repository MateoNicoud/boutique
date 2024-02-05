<?php
global $pdo, $getId;
include "../app/persistences/product.php";
$products = getProduct($pdo,$getId);
global $products;
include "../ressources/views/product/show.php";