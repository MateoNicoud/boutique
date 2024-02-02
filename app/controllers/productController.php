<?php
//echo 'le cartController se charge';
////$id=$_GET['id'];
$idArticles=filter_input(INPUT_GET,'id');
include '../app/persistences/cartProductsData.php';
$productAsked=array();
$productAsked=getProduct($mysqlClient,$idArticles );
//TODO: comprendre pourquoi on a un tableau de tableau ! modif requete getProduct() ?
$productAsked=$productAsked[0];

include '../ressources/views/product/show.tlp.php';