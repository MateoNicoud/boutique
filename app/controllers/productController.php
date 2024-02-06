<?php
global $mysqlClient;

$idArticles = filter_input(INPUT_GET, 'id');
if (isset($idArticles)) {
    include '../app/persistences/productData.php';

    $productAsked = getProduct($mysqlClient, $idArticles);
    include '../ressources/views/product/show.tlp.php';

} else {
    header("Location: index.php");
    exit;
}