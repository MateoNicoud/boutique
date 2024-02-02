<?php
function getProduct($pdo,$getId){
    $statement = $pdo->query(
        "SELECT *
        FROM products
        WHERE products.id=$getId"
    );
    return $statement->fetchAll();
}
function getAllProducts($pdo){
    $statement = $pdo->query(
        "SELECT *
        FROM products"
    );
    return $statement->fetchAll();
}
function initCart() : void {
    if(!isset($_SESSION["cart"])){
        $_SESSION["cart"] = array();
    }
}
function fakeCart() : void {
    $_SESSION["cart"]["products_id"] = $_POST["getId"];
    $_SESSION["cart"]["amount"]=$_POST["amount"];
}
function totalCart($pdo,$post) : void {

    $_SESSION["cart"]["price"]=getProduct($pdo,$post)[0]["priceTTC"]*$_SESSION["cart"]["amount"];
}
