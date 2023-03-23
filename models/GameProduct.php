<?php
require_once __DIR__ . "/Product.php";

class GameProduct extends Product
{
    public $min_age;
    public $size;

    function __construct(
        string $_name,
        float $_price,
        string $_category,
        string $_picture,
        string $_description,
        int $_min_age,
        string $_size
    ) {
        parent::__construct($_name, $_price, $_category, $_picture, $_description);
        $this->min_age =  $_min_age;
        $this->size = $_size;
    }
}
