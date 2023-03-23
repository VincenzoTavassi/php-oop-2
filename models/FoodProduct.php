<?php
require_once __DIR__ . "/Product.php";

class FoodProduct extends Product
{
    protected $composition;
    protected $weight;
    private $price_per_kg;

    function __construct(
        string $_name,
        float $_price,
        string $_category,
        string $_picture,
        string $_description,
        string $_composition,
        float $_weight,
    ) {
        parent::__construct($_name, $_price, $_category, $_picture, $_description);
        $this->setComposition($_composition);
        $this->setWeight($_weight);
        $this->setPricePerKg();
    }

    public function setComposition($composition)
    {
        if (!empty($composition)) $this->composition = $composition;
    }
    public function setWeight($weight)
    {
        if (!empty($weight) && $weight > 0) $this->weight = $weight; // controllo che il peso esista e sia maggiore di zero
        $this->setPricePerKg(); // ricalcolo prezzo al kg
    }

    private function setPricePerKg() // funzione per impostare il prezzo al kg
    {
        $this->price_per_kg = round($this->price / $this->weight, 2); // solo 2 decimali
    }

    public function getComposition()
    {
        return $this->composition;
    }
    public function getWeight()
    {
        return $this->weight;
    }

    public function getPricePerKg()
    {
        return $this->price_per_kg;
    }
}

$acana = new FoodProduct("Acana", 50.24, "cani", "Immagine", "Mangime per cani", "Pollo, Verdura", 10.0);
var_dump($acana->getPricePerKg());
