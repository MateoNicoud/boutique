<?php
include "../app/persistences/product.php";
$products = getProduct($pdo,$getId);
include "../ressources/views/product/show.php";