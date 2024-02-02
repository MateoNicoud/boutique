<?php
$products = getProduct($pdo,$getId);
global $products;
include "../ressources/views/product/show.php";