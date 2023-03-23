<?php
require_once __DIR__ . "/Product.php";

class BedProduct extends Product
{
    public $material;
    public $weight;

    function __construct(
        string $_name,
        float $_price,
        string $_category,
        string $_picture,
        string $_material,
        float $_weight,
        string $_description
    ) {
        parent::__construct($_name, $_price, $_category, $_picture, $_description);
        $this->material =  $_material;
        $this->weight = $_weight;
    }
}
