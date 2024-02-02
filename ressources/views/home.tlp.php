
<main>
    <?php if ($productAsked == false): ?>
        <div> pas de contenu à afficher</div>
    <?php else: ?>
        <div class="d-flex flex-md-row flex-column flex-wrap justify-content-around flexp-10">
            <?php foreach ($productAsked as $key => $value): ?>
                <div>
                    <div><h3><?= $value['id'] ?> <img class="border border-primary" src="https://placehold.co/300x200" alt="mockup img"/> </h3></div>

                    <div> <h4>titre:
                        <a href="/?action=product&id=<?= $value['id'] ?>">  <?= $value['title']; ?><a>
                        </h4>
                    </div>
                    <div><h5> description:</h5> <?= $value['description']; ?></div>
                    <div><h5> priceTTC: <?= $value['priceTTC']; ?></h5></div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</main>


