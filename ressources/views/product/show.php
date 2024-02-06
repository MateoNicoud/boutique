<br>
<h2><?= $products["title"] ?></h2>
<span><?= $products["description"] ?></span>
<br>
<span>Price : <?= $products["priceTTC"] ?>€</span>
<br>
<form method="post" action="http://boutique.local/index.php?action=cart">
    <input type="hidden" name="getId" value="<?=$getId?>">
    <label for="amount">amount<br>
        <input type="number" name="amount" required>
    </label>
    <button type="submit">Ajouter au panier</button>
</form>