<?php

namespace jkliru\Strategy;

/**
 * Class PlusOperation
 *
 * Реализует операцию сложения
 *
 * @package jkliru\Strategy
 */
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