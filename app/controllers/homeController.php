<pre>
<?php
echo "le homeController se charge \n";
 include'../app/persistences/cartProductsData.php';

 $productAsked=lastProductsProposed($mysqlClient,4);
#print_r($postAsked);
include '../ressources/views/home.tlp.php';


 ?>
</pre>