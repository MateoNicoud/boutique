<?php
function getProduct($pdo,$getId){
    $statement = $pdo->query(
        "SELECT *
        FROM products
        WHERE products.id=$getId"
    );
    return $statement->fetchAll();
}
function getAllProducts($pdo){
    $statement = $pdo->query(
        "SELECT *
        FROM products"
    );
    return $statement->fetchAll();
}