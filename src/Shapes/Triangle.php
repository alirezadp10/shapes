<?php

namespace App\Shapes;

class Triangle implements Shape
{
    private $side1;

    private $side2;

    private $side3;

    public function __construct(int $side1,int $side2,int $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function area(): int
    {
        $s = ($this->side1 + $this->side2 + $this->side3) / 2;
        return sqrt($s * ($s - $this->side1) * ($s - $this->side2) * ($s - $this->side3));
    }

    public function circumference(): int
    {
        return $this->side1 + $this->side2 + $this->side3;
    }
}