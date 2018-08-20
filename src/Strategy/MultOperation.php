<?php
/**
 * Created by PhpStorm.
 * User: pilot
 * Date: 8/20/18
 * Time: 9:49 PM
 */

namespace jkliru\Strategy;


class MultOperation implements OperationInterface
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function calculate(int $a, int $b): int
    {
        return $a * $b;
    }
}