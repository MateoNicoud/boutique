<?php

try {
    $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=boutique;charset=utf8',
        'boutique',
        'boutique'
    );
} catch (Exception $e) {
    die ('Erreur : ' . $e->getMessage());
}
