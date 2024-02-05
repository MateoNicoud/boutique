<?php
$routes = array(
    'home' => '../app/controllers/homeController.php',
    'product'=>'../app/controllers/productController.php',
    'cart' => "../app/controllers/cartController.php",
    'panier'=>'../app/controllers/panierController.php',
    '404' => '404.php',
);
//version Geremy
//$dirArray = scandir("../app/controllers");
//var_dump($dirArray);
//$routeArray = array();
//
//
//foreach ($dirArray as $file){
//    if(!($file == "." || $file == ".."|| $file==".gitkeep")){
//        $routeArray[] = explode("Controller", $file)[0];
//        $routeArray[] = [
//            explode("Controller", $file)[0] =>"../app/controllers/".$file
//        ];
//
//    }
//}

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
$action = $action ?? 'home';
$action = isset($routes[$action]) ? $action : '404';
$page = $routes[$action];
include $page;

//
//if (array_search($action, $routeArray) !== false){
//    $i = array_search($action, $routeArray);
//    require("../app/controllers/" . $routeArray[$i] . "Controller.php");
//
//}else{
//    require ("../ressources/views/errors/404.php");
//
//}