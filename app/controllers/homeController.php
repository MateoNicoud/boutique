<?php
global $mysqlClient;
 include'../app/persistences/productData.php';

 $productAsked=getAllProducts($mysqlClient,4);

include '../ressources/views/home.tlp.php';

