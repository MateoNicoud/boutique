<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boutique</title>
</head>
<body>
<?php

totalCart($pdo,1) ;
echo "Prix du panier : ".$_SESSION["cart"]["price"]."€";
?>
<h1> Ma boutique</h1>
<br>
