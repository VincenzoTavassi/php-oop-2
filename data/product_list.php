<?php
require_once __DIR__ . "/../models/BedProduct.php";
require_once __DIR__ . "/../models/GameProduct.php";
require_once __DIR__ . "/../models/FoodProduct.php";
require_once __DIR__ . "/../models/Product.php";
require_once __DIR__ . "/../models/Category.php";

// CATEGORIES 

$cats = new Category("Gatti", "https://cdn.icon-icons.com/icons2/38/PNG/512/blackcat_animal_5540.png");
$dogs = new Category("Cani", "https://cdn.icon-icons.com/icons2/2070/PNG/512/dog_icon_125586.png");
