<?php
include "../app/persistences/product.php";
$allProducts=getAllProducts($pdo);
include "../ressources/views/home.php";