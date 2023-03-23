<?php
require_once __DIR__ . "/Product.php";

class FoodProduct extends Product
{
    public $composition;
    public $weight;
    public $price_per_kg;

    function __construct(
        string $_name,
        float $_price,
        string $_category,
        string $_picture,
        string $_description,
        string $_composition,
        float $_weight,
        float $_price_per_kg
    ) {
        parent::__construct($_name, $_price, $_category, $_picture, $_description);
        $this->composition =  $_composition;
        $this->weight = $_weight;
        $this->price_per_kg = $_price_per_kg;
    }
}

$acana = new FoodProduct("Acana", 50.24, "cani", "Immagine", "Mangime per cani", "Pollo, Verdura", 10.0, 1.00);
var_dump($acana);
