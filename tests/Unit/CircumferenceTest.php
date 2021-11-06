<?php

namespace Tests\Unit;

use App\Calculator;
use App\Shapes\Circle;
use App\Shapes\Rectangle;
use App\Shapes\Square;
use App\Shapes\Triangle;
use PHPUnit\Framework\TestCase;

class CircumferenceTest extends TestCase
{
    /**
     * @test
     */
    public function it_must_calculate_square_circumference()
    {
        $shape = new Square(3);
        $circumference  = (new Calculator())->circumference($shape);
        $this->assertEquals(12,$circumference);
    }

    /**
     * @test
     */
    public function it_must_calculate_circle_circumference()
    {
        $shape = new Circle(3);
        $circumference  = (new Calculator())->circumference($shape);
        $this->assertEquals(18,$circumference);
    }

    /**
     * @test
     */
    public function it_must_calculate_rectangle_circumference()
    {
        $shape = new Rectangle(5,10);
        $circumference  = (new Calculator())->circumference($shape);
        $this->assertEquals(30,$circumference);
    }

    /**
     * @test
     */
    public function it_must_calculate_triangle_circumference()
    {
        $shape = new Triangle(3,4,5);
        $circumference  = (new Calculator())->circumference($shape);
        $this->assertEquals(12,$circumference);
    }
}
