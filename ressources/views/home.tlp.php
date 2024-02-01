<?php
echo "le HOME TEMPLATE se charcge \n";
?>

<?php include '../ressources/views/layouts/head.tlp.php' ?>
<?php include '../ressources/views/layouts/header.tlp.php' ?>

<main>
<?php if ($productAsked == false): ?>
    <div> pas de contenu à afficher</div>
<?php else:
    foreach ($productAsked as $key => $value): ?>
        <div><?= $value['id'] ?></div>
        <div> titre:
            <a href="/?action=article&id=<?= $value['id'] ?>">  <?= $value['title']; ?><a>
        </div>
        <div> description: <?= $value['description']; ?></div>
        <div> priceTTC: <?= $value['priceTTC']; ?></div>
    <?php endforeach; ?>
<?php endif; ?>
</main>
    <?php include '../ressources/views/layouts/footer.tlp.php' ?>

