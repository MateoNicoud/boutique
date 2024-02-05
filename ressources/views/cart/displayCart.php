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
    <?php $totalPrice = 0;
    for ($i = 0;
         $i < count($_SESSION["cart"]["products_id"]);
         $i++) {
        $price = array(
            $i => $i + 20
        );

        $productName = array(
            $i => "product " . $i
        );
        $totalPrice += $_SESSION["cart"]["amount"][$i] * $price[$i]
        ?>
        <tr>
            <td><?= $productName[$i]; ?></td>
            <td><?= $price[$i]; ?></td>
            <td><?= $_SESSION["cart"]["amount"][$i]; ?></td>
            <td><?= $_SESSION["cart"]["amount"][$i] * $price[$i]; ?></td>
        </tr>
    <?php }
    ?>
    </tbody>
</table>
<span>Prix total : <?=
    $totalPrice;
    ?>€</span>