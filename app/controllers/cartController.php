<?php
include "../app/persistences/cart.php";
initCart();
for ($i=1;$i<=count($_SESSION["cart"]["products_id"]);$i++){
    $article[$i]=bdCart($pdo,$i);
}
$totalCart = totalCart($article);
$amountArticleInCart = amountArticleInCart();
/*if(isset($_POST["amount"])){
    $amount = filter_input(INPUT_POST, "amount",FILTER_SANITIZE_SPECIAL_CHARS);
}
$_SESSION["cart"]= $pdo->query(
    "UPDATE products_has_order
SET amount =5
WHERE products_id=1;
SELECT products_id, amount
        FROM products_has_order
where products_id=1"
);
$_SESSION["cart"]=$_SESSION["cart"]->fetchAll();
var_dump($_SESSION["cart"]);*/

/*for($i=1;$i<count($_SESSION["cart"]["products_id"]);$i++){
    echo $_SESSION["cart"]["products_id"][$i] . "<br>" . $_SESSION["cart"]["amount"][$i];}
echo "<br>".count($_SESSION["cart"]["products_id"]);
echo "<br>".var_dump($_SESSION["cart"]["products_id"]);
session_unset();
/* ?>

<span>price : <?=$_SESSION["cart"]["price"][$i]?></span>
<?php }?>
*/
include"../ressources/views/layouts/header.php";
include "../ressources/views/cart/displayCart.php";
include"../ressources/views/layouts/footer.php";
