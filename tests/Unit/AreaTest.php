<?php

namespace Tests\Unit;

use App\Calculator;
use App\Shapes\Circle;
use App\Shapes\Rectangle;
use App\Shapes\Square;
use App\Shapes\Triangle;
use PHPUnit\Framework\TestCase;

class AreaTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_calculate_square_area()
    {
        $shape = new Square(4);
        $area  = (new Calculator())->area($shape);
        $this->assertEquals(16,$area);
    }

    /**
     * @test
     */
    public function it_must_calculate_circle_area()
    {
        $shape = new Circle(5);
        $area  = (new Calculator())->area($shape);
        $this->assertEquals(78,$area);
    }

    /**
     * @test
     */
    public function it_must_calculate_rectangle_area()
    {
        $shape = new Rectangle(5,10);
        $area  = (new Calculator())->area($shape);
        $this->assertEquals(50,$area);
    }

    /**
     * @test
     */
    public function it_must_calculate_triangle_area()
    {
        $shape = new Triangle(3,4,5);
        $area  = (new Calculator())->area($shape);
        $this->assertEquals(6,$area);
    }
}
