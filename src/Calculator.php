<?php

namespace App;

use App\Shapes\Shape;

class Calculator
{
    public function area(Shape $shape): int
    {
        return $shape->area();
    }

    public function circumference(Shape $shape): int
    {
        return $shape->circumference();
    }
}