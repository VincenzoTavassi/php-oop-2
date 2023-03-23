<?php

class Product
{
    protected $name;
    protected $price;
    public $category;
    protected $picture = "https://upload.wikimedia.org/wikipedia/commons/6/65/No-Image-Placeholder.svg";
    protected $description = "Nuovo prodotto - in attesa di descrizione";

    function __construct(
        string $_name,
        float $_price,
        string $_category,
        string $_picture,
        string $_description
    ) {
        $this->setName($_name);
        $this->setPrice($_price);
        $this->category = $_category;
        $this->picture = $_picture;
        $this->setDescription($_description);
    }

    public function setName($name)
    {
        if (strlen($name) > 3) $this->name = $name;
    }

    public function setPrice($price)
    {
        if (!empty($price)) $this->price = round($price, 2); // setto il prezzo con due decimali
    }

    public function setDescription($description)
    {
        if (strlen($description) > 10) $this->description = $description;
    }

    public function setPicture($picture)
    {
        if (strlen($picture) > 10) $this->picture = $picture;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPicture()
    {
        return $this->picture;
    }
}
