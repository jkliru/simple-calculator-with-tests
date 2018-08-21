<?php

namespace jkliru\Strategy;

/**
 * Class DivsOperation
 *
 * Реализует операцию деления
 * При делении на 0 выбрасывает исключение
 *
 * @package jkliru\Strategy
 */
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