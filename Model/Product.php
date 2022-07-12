<?php
declare(strict_types=1);

class Product
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getID() : int
    {
        return $this->id;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function getPrice() : int
    {
        return $this->price;
    }
}