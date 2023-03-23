<?php
require_once __DIR__ . "/Product.php";

class BedProduct extends Product
{
    protected $material;
    protected $weight;

    function __construct(
        string $_name,
        float $_price,
        Category $_category,
        string $_picture,
        string $_description,
        string $_material,
        float $_weight
    ) {
        parent::__construct($_name, $_price, $_category, $_picture, $_description);
        $this->setMaterial($_material);
        $this->setWeight($_weight);
    }

    public function setMaterial($material)
    {
        if (!empty($material)) $this->material = $material;
    }
    public function setWeight($weight)
    {
        if (!empty($weight) && $weight > 0) $this->weight = $weight; // controllo che il peso esista e sia maggiore di zero
    }

    public function getMaterial()
    {
        return $this->material;
    }
    public function getWeight()
    {
        return $this->weight;
    }
}




// $bed = new BedProduct("Cuccia", 90.30, "Cane", "picture", "Descrizione", "Gomma", 10);
// var_dump($bed->getWeight());