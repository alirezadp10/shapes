<?php

namespace App\Shapes;

class Square implements Shape
{
    private $side;

    public function __construct(int $side)
    {
        $this->side = $side;
    }

    public function area(): int
    {
        return pow($this->side,2);
    }

    public function circumference(): int
    {
        return $this->side * 4;
    }
}