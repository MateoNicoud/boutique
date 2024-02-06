<?php
function getProduct($pdo, $getId)
{
    $statement = $pdo->query(
        "SELECT *
        FROM products
        WHERE products.id=$getId"
    );
    $productInfo = $statement->fetchAll();
    return $productInfo[0];
}

function getAllProducts($pdo)
{
    $statement = $pdo->query(
        "SELECT *
        FROM products"
    );
    $productInfo = $statement->fetchAll();
    return $productInfo;
}
