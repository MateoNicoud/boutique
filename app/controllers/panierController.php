<pre>
<?php
include '../app/persistences/cartData.php';
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
include '../ressources/views/cart/index.php';

?>
</pre>


