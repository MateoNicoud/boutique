<?php
function getAllProducts(PDO $mysqlClient, $numberArticles)
{
    $mySqlQuery = "SELECT * FROM products LIMIT $numberArticles;";
    $lastPosts = $mysqlClient->prepare($mySqlQuery);
    $lastPosts->execute();
    return $lastPosts->fetchAll();
}

function getProduct(PDO $mysqlClient, $idArticle)
{
    $mySqlQuery = "SELECT * FROM `products` WHERE id= :id;";
    $stm = $mysqlClient->prepare($mySqlQuery);
    $stm->execute(["id" => $idArticle]);
    return $stm->fetch();
}