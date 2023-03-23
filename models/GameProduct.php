<?php
require_once __DIR__ . "/Product.php";

class GameProduct extends Product
{
    public $size;
    private $forPuppy = false;

    function __construct(
        string $_name,
        float $_price,
        Category $_category,
        string $_picture,
        string $_description,
        bool $_forPuppy,
        string $_size
    ) {
        parent::__construct($_name, $_price, $_category, $_picture, $_description);
        $this->setForPuppy($_forPuppy);
        $this->size = $_size;
    }

    public function setForPuppy($value)
    {
        if ($value === true) $this->forPuppy = true;
    }

    public function setSize($size)
    {
        if (!empty($size)) $this->size = $size;
    }

    public function getForPuppy()
    {
        return $this->forPuppy;
    }
}

// $game = new GameProduct("bonga", 10, 'cani', 'picture', 'descrizione', 's', 1);
// var_dump($game);