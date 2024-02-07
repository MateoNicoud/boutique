<?php
// La fonction “getProduct” qui retourne un produit de la BDD
//fonction pour tous les produits
function getAllProducts($pdo)
{
    $recovered = $pdo->query("SELECT id,title,description,priceTTC,weight,tva,stock,categories_id,tva_id,price_HTT
    FROM products");
    return $recovered->fetchAll();
}

// fonction pour un seul produit
function getProduct($pdo, $Id)
{
    $productStmt = $pdo->prepare("SELECT id,title,description,priceTTC,weight,tva,stock,categories_id,tva_id,price_HTT
  FROM products
WHERE id = :id_product; ");
    $productStmt->execute(['id_product' => $Id]);
    return $productStmt->fetch(PDO::FETCH_ASSOC);
}


