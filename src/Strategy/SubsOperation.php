<?php

namespace jkliru\Strategy;

/**
 * Class SubsOperation
 *
 * Реализует операцию вычитания
 *
 * @package jkliru\Strategy
 */
class SubsOperation implements OperationInterface
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function calculate(int $a, int $b): int
    {
        return $a - $b;
    }
}