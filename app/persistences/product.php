<?php
// La fonction “getProduct” qui retourne un produit de la BDD
//fonction pour tous les produits
function getProduct($pdo)
{
    $recovered = $pdo ->query("SELECT id,title,description,priceTTC,weight,tva,stock,categories_id,tva_id,price_HTT
    FROM products");

    echo '<br>';
    return $recovered ->fetchAll(PDO::FETCH_ASSOC);
}

// fonction pour un seul produit
function getProductByID($pdo,$Id)
{
    $recovered = $pdo ->query("SELECT id,title,description,priceTTC,weight,tva,stock,categories_id,tva_id,price_HTT
    FROM products WHERE id =$Id");

    echo '<br>';
    return $recovered ->fetchAll(PDO::FETCH_ASSOC);
}