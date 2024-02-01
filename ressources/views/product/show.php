<?php

?>
<br>
<h2><?= $products[0]["title"] ?></h2>
<span><?= $products[0]["description"] ?></span>
<br>
<span>Price : <?= $products[0]["priceTTC"] ?>€</span>
<br>
<form method="post" action="">
    <label for="amount">amount<br>
        <input type="number" name="amount">
    </label>
    <button type="submit">add in cart</button>
</form>