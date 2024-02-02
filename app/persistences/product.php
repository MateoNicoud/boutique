<?php

function getProduct ($pdo, $id)
{
    $productStmt = $pdo->query ("SELECT title, description, priceTTC
FROM products
WHERE products.id = $id; ");
    return $productStmt->fetchAll (PDO::FETCH_ASSOC);
}

function getAllProducts ($pdo)
{
    $allProductsStmt = $pdo->query ("SELECT *
FROM products
ORDER by title ;");
    return $allProductsStmt->fetchAll (PDO::FETCH_ASSOC);
}