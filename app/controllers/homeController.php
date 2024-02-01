
<?php
echo "le homeController se charge \n";
 include'../app/persistences/cartProductsData.php';

 $productAsked=proposeLastProducts($mysqlClient,4);

include '../ressources/views/home.tlp.php';


 ?>
