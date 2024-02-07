<?php
// #votre FrontController avec les routes HTTP

// Récupère le paramètre 'action' de la requête GET
$action = filter_input(INPUT_GET, "action");

// Si 'action' est vide, le définir comme '/'
if (empty($action)) {
    $action = '/';
}

// Définit un tableau de routes associant les actions aux chemins de fichiers correspondants
$routes = [
    'product' => "../app/controllers/showProductController.php",
    'cart'=> "../app/controllers/cartController.php",
    '/' => "../app/controllers/homeController.php",
];

// Vérifie si l'action spécifiée existe dans le tableau des routes
if (isset($routes[$action])) {
    // Si l'action existe, inclut le fichier correspondant
    include $routes[$action];
}

?>

