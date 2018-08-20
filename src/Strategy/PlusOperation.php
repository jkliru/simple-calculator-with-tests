<?php
/**
 * Created by PhpStorm.
 * User: pilot
 * Date: 8/20/18
 * Time: 9:47 PM
 */

namespace jkliru\Strategy;

class PlusOperation implements OperationInterface
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function calculate(int $a, int $b): int
    {
        return $a + $b;
    }
}