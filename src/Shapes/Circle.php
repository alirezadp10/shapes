<?php

namespace App\Shapes;

class Circle implements Shape
{
    private $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function area(): int
    {
        return pi() * $this->radius * $this->radius;
    }

    public function circumference(): int
    {
        return 2 * pi() * $this->radius;
    }
}