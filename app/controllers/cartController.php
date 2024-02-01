<?php
echo 'le cartController se charge';
include '../app/persistences/cartProductsData.php';

$articleAsked=oneProductRequired($mysqlClient,1 );
var_dump($articleAsked);
include '../ressources/views/product/show.tlp.php';