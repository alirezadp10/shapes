<?php

namespace App\Shapes;

class Rectangle implements Shape
{
    private $width;

    private $height;

    public function __construct(int $height,int $width)
    {
        $this->width  = $width;
        $this->height = $height;
    }

    public function area(): int
    {
        return $this->width * $this->height;
    }

    public function circumference(): int
    {
        return ($this->width + $this->height) * 2;
    }
}