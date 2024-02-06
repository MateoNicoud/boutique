<?php

require_once '../config/database.php';
require_once '../app/persistences/cartData.php';

session_start();
if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=initCart(3);
}
