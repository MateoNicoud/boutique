<?php
$getProduct = filter_input(INPUT_GET,"action", FILTER_SANITIZE_URL);
$getId = filter_input(INPUT_GET,"id", FILTER_SANITIZE_URL);

if(!isset($getId)|| !isset($getProduct)){
include "../app/controllers/homeController.php";
}
if ($getProduct=="product"&&!empty($getId)){ include "../app/controllers/showController.php";}