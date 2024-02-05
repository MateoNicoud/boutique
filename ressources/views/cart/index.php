<?= 'le cart tplate se charge'; ?>
<div class="d-flex p-2 justify-content-center" style="background-color: brown">
    PANIER :

    <div>
        <?php for ($i=1; $i<(count($panier)); $i++): ?>
        <div>
            img
        </div>
        <div>
            nom du produit: <?= $panier[$i]['title']; ?>
        </div>
        <div>
            <p> prix TTC: <?= $panier[$i]['priceTTC']; ?></p>
        </div>
        <div>
            <p> Quantité: <?= $panier[$i]['quantité']; ?></p>
        </div>
            <div>
                Total :<?= $panier[$i]['quantité']*$panier[$i]['priceTTC'];?> euros
            </div>
        <?php endfor; ?>
        <div>
            Total de la commande:<?= $total;?> euros
        </div>
    </div>
</div>

