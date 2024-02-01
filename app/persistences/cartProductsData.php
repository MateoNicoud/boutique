<?php
function lastProductsProposed(PDO $mysqlClient, $numberArticles)
{

    $lastPosts = [];
    $mySqlQuery = "SELECT * FROM products LIMIT $numberArticles;";
    $lastPosts = $mysqlClient->prepare($mySqlQuery);
    $lastPosts->execute();
    $lastPosts = $lastPosts->fetchAll();
    return $lastPosts;
}