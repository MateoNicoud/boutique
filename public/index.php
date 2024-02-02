<?php
session_start();
$_SESSION ['customer']= 'client';
require ('../config/database.php');


$controllers = [
    'product' => '../app/controllers/productsController.php',
    'home' => '../app/controllers/homeController.php',
    'cart' => '../app/controllers/cartController.php',
    '404' => '../ressources/views/errors/404.php',
];

$action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_SPECIAL_CHARS);

$action =  isset ($action) ? (array_key_exists($action, $controllers) ? $action : '404') : 'home';

include $controllers [$action];
