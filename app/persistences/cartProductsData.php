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
function getProduct(PDO $mysqlClient, $idArticle )
{
    $mySqlQuery="SELECT * FROM `products` WHERE id= :id;";
    $stm=$mysqlClient->prepare($mySqlQuery);
    $stm->execute(["id"=>$idArticle]);
    return$stm->fetchAll();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}