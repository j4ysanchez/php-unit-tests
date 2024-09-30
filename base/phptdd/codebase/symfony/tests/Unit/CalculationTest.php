<?php
namespace App\Tests\Unit;
use App\Example\Calculator;
use PHPUnit\Framework\TestCase;

class CalculationTest extends TestCase {


    /**
     * @covers \App\Example\Calculator::calculateTotal
     */
    public function testCanCalculateTotal() {
        // Expected result
        $expectedTotal = 6;

        // Test data
        $a = 1;
        $b = 2;
        $c = 3;

        $calculator = new Calculator();
        $total = $calculator->calculateTotal($a, $b, $c);

        $this->assertEquals($expectedTotal, $total);
    }


    /**
     *  @covers \App\Example\Calculator::adde
     */
    public function testCanAddIntegers() {

        $expectedTotal = 7;

        $a = 2;
        $b = 5;

        $calculator = new Calculator();

        $total = $calculator->add($a, $b);

        $this->assertEquals($expectedTotal, $total);

    }
}


?>
