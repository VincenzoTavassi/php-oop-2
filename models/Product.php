<?php

class Product
{
    public $name;
    public $price;
    public $category;
    public $picture;
    public $description;

    function __construct(
        string $_name,
        float $_price,
        string $_category,
        string $_picture,
        string $_description
    ) {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->picture = $_picture;
        $this->description = $_description;
    }
}
