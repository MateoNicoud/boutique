<?php
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
fakeCart();

echo $_SESSION["cart"]["products_id"]."<br>".$_SESSION["cart"]["amount"];
?>

<span>price : <?=$_SESSION["cart"]["price"]?></span>
