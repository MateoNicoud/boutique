<h2>Panier</h2>
<table>
    <thead>
    <tr>
        <th scope="col">Produit</th>

        <th scope="col">Prix unitaire</th>

        <th scope="col">Quantité</th>

        <th scope="col">Prix total</th>
    </tr>
    </thead>
    <tbody>
    <?php //$totalPrice = 0;
    for ($i = 1;
         $i <= count($_SESSION["cart"]["products_id"]);
         $i++) {
        //$totalPrice += $_SESSION["cart"]["amount"][$i] * $article[$i][0]["priceTTC"];
        ?>
        <tr>
            <td><?= $article[$i][0]["title"]; ?></td>
            <td><?= $article[$i][0]["priceTTC"]; ?></td>
            <td><?= $_SESSION["cart"]["amount"][$i]; ?></td>
            <td><?= $_SESSION["cart"]["amount"][$i] * $article[$i][0]["priceTTC"]; ?></td>
        </tr>
    <?php }
    ?>
    </tbody>
</table>
<span>Prix total : <?=
    $totalCart;
    ?>€</span>
<br>
<button>Valider le panier</button>