<!-- PAGE DU QUI RECUPERE LES INFOS DES PRODUITS (PAGE PRODUIT)-->
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<?php
include("../ressources/views/layouts/head.php")
?>
<div class="text-center"><h1>MA BOUTIQUE</h1></div>
<?php
include("../ressources/views/layouts/header.php");
?>
<body>
<main>
    <?php if (!isset($products)) : ?>
        <p>Aucun Article trouvé</p>
    <?php else : ?>
        <section>
            <?php foreach ($products as $product) : ?>
                <article>

                    <h2>
                        <a href="/?action=product&id=<?= $product ['id']; ?>">
                            <?= $product ['title']; ?>
                        </a>
                    </h2>
                    <p>
                        <?= $product ['description']; ?>
                    </p>
                </article>
            <?php endforeach; ?>
        </section>
    <?php endif; ?>

</main>
<?php
include("../ressources/views/layouts/footer.php");
?>
</body>
</html>
