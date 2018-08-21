<?php

namespace jkliru\Strategy;

/**
 * Class MultOperation
 *
 * Реализует операцию умножения
 *
 * @package jkliru\Strategy
 */
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