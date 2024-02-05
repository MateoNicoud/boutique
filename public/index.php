<?php
session_start();
include_once '../ressources/views/layouts/head.tlp.php';
include_once '../ressources/views/layouts/header.tlp.php';
include '../config/database.php';
include'../route/web.php';
include_once '../ressources/views/layouts/footer.tlp.php';

$_SESSION['cart']=initCart(3);
var_dump($_SESSION['cart']);
$_SESSION['cart']=fakeCart($_SESSION['cart'],3,2,4);
var_dump($_SESSION['cart']);

include '../ressources/views/cart/index.php';