<?php
declare(strict_types=1);

class CustomerGroup
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
    public function getParentID() : int
    {
        return $this->parent_id;
    }
    public function getFixedDiscount() : int
    {
        return $this->fixed_discount;
    }
    public function getVariableDiscount() : int
    {
        return $this->variable_discount;
    }
}