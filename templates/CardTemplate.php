<div class="card" style="height: 100%;">
    <img src="<?= $prodotto->getPicture() ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h2>
            <?= $prodotto->getName() ?>
        </h2>
        <p class="card-text">
            <?= $prodotto->getDescription() ?>
        </p>
        <img src="<?= $prodotto->category->icon ?>" alt="" style="max-width: 50px;">
        <span><strong>Prezzo €
                <?= $prodotto->getPrice() ?>
            </strong></span>
        <?php if ($prodotto instanceof FoodProduct) : ?>
            <small>(Prezzo al kg €
                <?= $prodotto->getPricePerKg() ?>)
            </small>
            <p>Ingredienti:
                <?= $prodotto->getComposition() ?>
            </p>
        <?php endif; ?>
        <?php if ($prodotto instanceof BedProduct) : ?>
            <p>Materiali:
                <?= $prodotto->getMaterial() ?>
            </p>
        <?php endif; ?>
        <?php if ($prodotto instanceof FoodProduct || $prodotto instanceof BedProduct) : ?>
            <small>(Peso
                <?= $prodotto->getWeight() ?> kg)
            </small>
        <?php elseif ($prodotto instanceof GameProduct) : ?>
            <small>Taglia
                <?= $prodotto->size ?>
            </small>
            <?php if ($prodotto->getForPuppy() == true) : ?>
                <small>Per cuccioli</small>
            <?php else : ?>
                <small>Per adulti</small>
            <?php endif; ?>

        <?php endif; ?>

    </div>
</div>