<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{

    public function testOne()
    {
        $method = new Calculator();
        $this->assertEquals(5, $method->changeTheseNumbers(3, 2));
    }

    public function testTwo()
    {
        $method = new Calculator();
        $result = $method->changeTheseNumbers(5, 2);
        $this->assertEquals(7, $method->changeTheseNumbers(5, 2));
    }

    public function testThree()
    {
        $method = new Calculator();
        $this->assertEquals(10, $method->changeTheseNumbers(5, 5));
    }

    public function testFour()
    {
        $method = new Calculator();
        $this->assertEquals(1, $method->reduceThisStuff(3, 2));
    }

    public function testFive()
    {
        $method = new Calculator();
        $this->assertEquals(6, $method->makeThemBigger(2, 3));
    }

    public function testSix()
    {
        $method = new Calculator();
        $this->assertEquals(2, $method->ratioThis(6, 3));
    }
}
