<?php
function getProduct($pdo,$getId){
    $statement = $pdo->query(
        "SELECT *
        FROM products
        WHERE products.id=$getId"
    );
    return $statement->fetchAll();
}