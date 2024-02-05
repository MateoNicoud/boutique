<pre>
<?php
include '../app/persistences/cartProductsData.php';
echo "le paniercontroller se charge";


//var_dump($_SESSION['cart']);
//var_dump($_SESSION['cart'][1]);
$keys=array_keys($_SESSION['cart']);
//print_r($keys);
//$Quantité[0]=$_SESSION['cart'][1]
$panier=[0];
foreach ($keys as $value){
    $product=getProduct($mysqlClient,$value);
    $panier=array_merge_recursive($panier,$product);
    $panier [$value]['quantité'] = $_SESSION['cart'][$value];

};
//print_r(array_values($_SESSION['cart']));
//echo"les valeurs sont ".((array_values($_SESSION['cart']))[2]);
print_r($panier);
echo "longueur du tableau panier \n";
var_dump(count($panier));
var_dump(($panier[3]['quantité']));
var_dump(($panier[3]['priceTTC']));

$total=totalCart($panier);
?>
</pre>


