<?php

use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function testPlusTwoNumbers(): void
    {
        $calculator = new \jkliru\Strategy\Calculator('+');

        $a = 123;
        $b = 683;

        $this->assertEquals($a + $b, $calculator->calculate($a, $b));
    }

    public function testSubsTwoNumbers(): void
    {
        $calculator = new \jkliru\Strategy\Calculator('-');

        $a = 123;
        $b = 683;

        $this->assertEquals($a - $b, $calculator->calculate($a, $b));
    }

    public function testMultTwoNumbers(): void
    {
        $calculator = new \jkliru\Strategy\Calculator('*');

        $a = 123;
        $b = 683;

        $this->assertEquals($a * $b, $calculator->calculate($a, $b));
    }

    public function testDivsTwoNumbers(): void
    {
        $calculator = new \jkliru\Strategy\Calculator('/');

        $a = 123;
        $b = 683;

        $this->assertEquals(floor($a / $b), $calculator->calculate($a, $b));
    }

    public function testDivsByZero(): void
    {
        $calculator = new \jkliru\Strategy\Calculator('/');
        $this->expectException(\Exception::class);

        $a = 123;
        $b = 0;

        $calculator->calculate($a, $b);
    }
}