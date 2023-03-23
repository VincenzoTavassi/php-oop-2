<?php

require_once __DIR__ . "/data/product_list.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>

<body>
    <h1>Prodotti</h1>
    <?php foreach ($cats_products["food"] as $cibo) : ?>
    <p><?= $cibo->getName() ?></p>
    <p>
        <img src="<?= $cibo->getPicture() ?>" alt="">
    </p>
    <?php endforeach; ?>
</body>

</html>