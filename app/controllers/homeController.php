<?php

global $pdo;

include ("../app/persistences/product.php");

$products = getAllProducts($pdo);

include ("../ressources/views/home.php");