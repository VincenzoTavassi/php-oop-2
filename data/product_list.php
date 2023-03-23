<?php
require_once __DIR__ . "/../models/BedProduct.php";
require_once __DIR__ . "/../models/GameProduct.php";
require_once __DIR__ . "/../models/FoodProduct.php";
require_once __DIR__ . "/../models/Product.php";
require_once __DIR__ . "/../models/Category.php";

// CATEGORIES 

$cats = new Category("Gatti", "https://cdn.icon-icons.com/icons2/38/PNG/512/blackcat_animal_5540.png");
$dogs = new Category("Cani", "https://cdn.icon-icons.com/icons2/2070/PNG/512/dog_icon_125586.png");

// GATTI

$cats_products = [
    "food" => [
        new FoodProduct("Croccantini", 25, $cats, "null", "null", "Pollo e Manzo", 5),
        new FoodProduct("Umido", 30, $cats, "null", "Un buon prodotto umido per il tuo gatto.", "Salmone e pesce azzurro", 2.5)
    ],
    "Games" => [
        new GameProduct("Pallina", 21, $cats, "null", "Una pallina per il tuo micio", true, "S"),
        new GameProduct("Tiragraffi", 45, $cats, "null", "Un magnifico tiragraffi", false, "XL"),
    ],
    "Beds" => [
        new BedProduct("Cuccia", 60, $cats, "null", "Una bella cuccia per un bel gatto", "Stoffa", 5),
        new BedProduct("Scatola", 2, $cats, "null", "Al tuo gatto serve una scatola? Eccola", "Cartone", 0.5),
    ]
];

// Tutti i prodotti dei gatti - array non suddiviso
$all_cats_products = array_merge($cats_products["food"], $cats_products["Games"], $cats_products["Beds"]);


// CANI

$dogs_products = [
    "food" => [
        new FoodProduct("Croccantini per cani", 25, $dogs, "null", "null", "Pollo e Manzo", 5),
        new FoodProduct("Umido per cani", 30, $dogs, "null", "Un buon prodotto umido per il tuo cane.", "Salmone", 2.5)
    ],
    "Games" => [
        new GameProduct("Pallina", 21, $dogs, "null", "Una pallina per il tuo micio", true, "S"),
        new GameProduct("Bastone", 45, $dogs, "null", "Un magnifico bastone da tirare", false, "XL"),
    ],
    "Beds" => [
        new BedProduct("Cuccia", 60, $dogs, "null", "Una bella cuccia per un bel cane", "Stoffa", 5),
        new BedProduct("Casetta", 2, $dogs, "null", "Al tuo cane serve una casa in più? Eccola", "Mattoni", 50),
    ]
];

// Tutti i prodotti dei cani - array non suddiviso
$all_dogs_products = array_merge($dogs_products["food"], $dogs_products["Games"], $dogs_products["Beds"]);
var_dump($all_dogs_products);
