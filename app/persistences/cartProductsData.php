<?php
function getAllProducts(PDO $mysqlClient, $numberArticles)
{

    $lastPosts = [];
    $mySqlQuery = "SELECT * FROM products LIMIT $numberArticles;";
    $lastPosts = $mysqlClient->prepare($mySqlQuery);
    $lastPosts->execute();
    $lastPosts = $lastPosts->fetchAll();
    return $lastPosts;
}

function getProduct(PDO $mysqlClient, $idArticle)
{
    $mySqlQuery = "SELECT * FROM `products` WHERE id= :id;";
    $stm = $mysqlClient->prepare($mySqlQuery);
    $stm->execute(["id" => $idArticle]);
    return $stm->fetchAll();
}

function countTotalProductInCatalog()
{
    (int)$nbTotalProduct = 0;
    return $nbTotalProduct;
}

function initCart($idArticleMax = 4){
//    on sélectionne tous les produits par leur id et ont les set à quantité =0
//    on compte le nombre total de produits
//    pour chaque produit on set $_Session
    $array[]=[];
    for($i = 1; $i <= $idArticleMax; $i++) {
        $array[$i]=0;
            }
    return $array;
}

function fakeCart(array $array,int $a, int $b, int $c){
//on sélectionne les 3 premiers produits
//on les met à quantité a,b,c
    $value_filled= [$a,$b,$c];
    for($i = 0; $i < count ($array); $i++) {
        $array=array_fill_keys($array[$i],$value_filled[$i]);
    }
    return $array;

}
function totalCart()
{

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
