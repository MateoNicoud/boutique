<pre>
<?php
include_once'../app/persistences/cartData.php';
echo "le paniercontroller se charge";

$keys = array_keys($_SESSION['cart']);

//print_r($keys);
//$Quantité[0]=$_SESSION['cart'][1]
$panier = [0];
foreach ($keys as $value) {
    $product = getProduct($mysqlClient, $value);
    $panier = array_merge_recursive($panier, $product);
    $panier [$value]['quantité'] = $_SESSION['cart'][$value];

};
$total = totalCart($panier);
include_once '../ressources/views/cart/index.php';

?>
</pre>


