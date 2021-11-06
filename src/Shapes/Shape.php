<?php

namespace App\Shapes;

interface Shape
{
    public function area(): int;

    public function circumference(): int;
}