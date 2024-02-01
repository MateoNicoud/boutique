<?php

require ('../config/database.php');

$controllers = [
    'product' => 'productsController'
];

$action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_URL);

if (!isset($action));
{
    $action = 'product';
}
if(isset($controllers[$action])){
    require("../app/controllers/" . $controllers[$action] . ".php");
}else{
    require( "../ressources/views/errors" . "404.php");
}