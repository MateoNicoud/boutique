<?php
function initCart(): void
{
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
        $_SESSION["cart"]["products_id"] = array();
        $_SESSION["cart"]["amount"] = array();
        //fakeCart();
    }
}

function fakeCart(): void
{
    for ($i = 1; $i <= 3; $i++) {
        $_SESSION["cart"]["products_id"][$i] = $i;
        $_SESSION["cart"]["amount"][$i] = $i + 10;
    }
}
function bdCart($pdo,$idProduct){
    $statement = $pdo->query(
        "SELECT id, title, priceTTC, stock
        FROM products
        WHERE id = $idProduct"
    );
    return $statement->fetchAll();
}
function totalCart($article)
{
    $totalPrice = 0;
    for ($i = 0;

         $i <= max($_SESSION["cart"]["products_id"]);
         $i++) {
        if(isset($_SESSION["cart"]["amount"][$i])&&isset($article[$i])){
            $totalPrice += $_SESSION["cart"]["amount"][$i] * $article[$i][0]["priceTTC"];
        }

        // $_SESSION["cart"]["price"]=getProduct($pdo,$post)[0]["priceTTC"]*$_SESSION["cart"]["amount"];
    }
    return $totalPrice;
}
function amountArticleInCart(){
    $amount=0;
    for ($i=1;$i<max($_SESSION["cart"]["products_id"]);$i++){
        if(isset($_SESSION["cart"]["amount"][$i])) {
            $amount += 1 * $_SESSION["cart"]["amount"][$i];
        }
    }
    return $amount;
}

function addProductCart($productSelected) : void {
    //if($article[$productSelected][0]["stock"]>=$_SESSION["cart"]["amount"][$productSelected]){
        $_SESSION["cart"]["products_id"][$productSelected]=$productSelected;
        $_SESSION["cart"]["amount"][$productSelected] = $_POST["amount"];

    //}
}

function displayproduct() : void {
    global $pdo;

    for ($i = 1; $i <= max($_SESSION["cart"]["products_id"]); $i++) {
        if (isset($_SESSION["cart"]["products_id"][$i])) {
            $article[$i] = bdCart($pdo, $i);
        }
    }

    $totalCart = totalCart($article);
    $amountArticleInCart = amountArticleInCart();


}