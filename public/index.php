<?php
session_start();
include "../config/database.php";
include "../app/persistences/product.php";
initCart();
include"../ressources/views/layouts/header.php";
include "../route/web.php";
include"../ressources/views/layouts/footer.php";