<h2>Panier</h2>
<?php if (!empty($_SESSION["cart"]["products_id"])) {
    //var_dump($_SESSION["cart"]["products_id"]); ?>
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
        for ($i = 0;
             $i <= max($_SESSION["cart"]["products_id"]);
             $i++) {
            if (isset($article[$i])) {
                //$totalPrice += $_SESSION["cart"]["amount"][$i] * $article[$i][0]["priceTTC"];
                ?>
                <tr>
                    <td><?= $article[$i][0]["title"]; ?></td>
                    <td><?= $article[$i][0]["priceTTC"]; ?></td>
                    <td><?= $_SESSION["cart"]["amount"][$i]; ?></td>
                    <td><?= $_SESSION["cart"]["amount"][$i] * $article[$i][0]["priceTTC"]; ?></td>
                </tr>
            <?php }
        }
        ?>
        </tbody>
    </table>

    <span>Prix total : <?=
        $totalCart;
        ?>€</span>

    <br>
    <button>Valider le panier</button>
<?php } else { ?>
    <span>Votre panier est vide</span>
<?php } ?>

