<?php
// Connexion à la BDD
try {
    $pdo = new PDO('mysql:host=blog.local;dbname=Boutique', 'HeleneFntBoutique', '6cp6pgkb');
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}