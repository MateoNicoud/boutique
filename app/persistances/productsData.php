<?php

function detailsProduct ($pdo)
{
    $productstmt = $pdo->query ("SELECT title, description
FROM products
WHERE products.id = 1; ");
    return $productstmt->fetchAll (PDO::FETCH_ASSOC);
}