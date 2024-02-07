<h2>Panier</h2>
<?php if (!empty($_SESSION["cart"]["products_id"])) {
    //var_dump($_SESSION["cart"]["products_id"]);
    //print_r($article);
    /*echo '<br>';
    var_dump((int)$_SESSION["cart"]["amount"]);
    echo '<br>';
    var_dump($_SESSION);*/
   ?>
    <form method="post" action="http://boutique.local/index.php?action=cart">
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
                    <td><?= $article[$i]["title"]; ?></td>
                    <td><?= $article[$i]["priceTTC"]; ?></td>
                    <td><input type="number" name="amount<?=$i?>" value="<?= (int)$_SESSION["cart"]["amount"][$i]; ?>" >
                    <input type="hidden" name="id<?=$i?>" value="<?=$i?>"></td>
                    <td><?= $_SESSION["cart"]["amount"][$i] * $article[$i]["priceTTC"]; ?></td>
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
    <button type="submit">Modifier le panier</button>
    </form>
<?php } else { ?>
    <span>Votre panier est vide</span>
<?php } ?>

