<?php
/**
 * Created by PhpStorm.
 * User: pilot
 * Date: 8/20/18
 * Time: 9:49 PM
 */

namespace jkliru\Strategy;

class DivsOperation implements OperationInterface
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     * @throws \Exception
     */
    public function calculate(int $a, int $b): int
    {
        if ($b == 0) {
            throw new \Exception('Division by zero');
        }

        return floor($a / $b);
    }
}