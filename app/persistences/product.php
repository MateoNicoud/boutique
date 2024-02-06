<?php
// Fonctions aux produits
function getProduct($pdo, $id)
{
    $productStmt = $pdo->prepare("SELECT id, title, description, priceTTC
FROM products
WHERE id = :id_product; ");
    $productStmt->execute (['id_product'=>$id]);
    return $productStmt->fetch(PDO::FETCH_ASSOC);
}

function getAllProducts($pdo)
{
    $allProductsStmt = $pdo->query("SELECT *
FROM products
ORDER by title ;");
    return $allProductsStmt->fetchAll(PDO::FETCH_ASSOC);
}
