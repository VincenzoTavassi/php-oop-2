<?php

require_once __DIR__ . "/data/product_list.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once __DIR__ . "/templates/Head.php" ?>
    <title>PHP OOP 2</title>
</head>

<body>
    <div class="container text-center">
        <h2 class="my-4">Prodotti per Gatti</h2>
        <div class="row row-cols-6 justify-content-center gy-4">
            <?php foreach ($all_cats_products as $prodotto) : ?>
            <div class="col">
                <?php include __DIR__ . "/templates/CardTemplate.php" ?>
            </div>
            <?php endforeach; ?>
        </div>

        <h2 class="my-4">Prodotti per Cani</h2>
        <div class="row row-cols-6 justify-content-center gy-4">
            <?php foreach ($all_dogs_products as $prodotto) : ?>
            <div class="col">
                <?php include __DIR__ . "/templates/CardTemplate.php" ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</body>

</html>