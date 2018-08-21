<?php

namespace jkliru\Strategy;

/**
 * Class Calculator
 *
 * Основной класс приложения
 *
 * @package jkliru\Strategy
 */
class Calculator
{
    /**
     * @var OperationInterface
     */
    private $strategy;

    /**
     * Calculator constructor.
     * @param string $operation
     */
    public function __construct(string $operation)
    {
        $this->strategy = $this->getStrategy($operation);
    }

    /**
     * Определяем операцию
     *
     * @param $operation
     * @return OperationInterface
     * @throws \Exception
     */
    private function getStrategy($operation): OperationInterface
    {
        switch ($operation) {
            case '+':
                return new PlusOperation();

                break;
            case '-':
                return new SubsOperation();

                break;
            case '*':
                return new MultOperation();

                break;
            case '/':
                return new DivsOperation();

                break;

            default:
                throw new \Exception('Unknown operation');

                break;
        }
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function calculate(int $a, int $b): int {
        return $this->strategy->calculate($a, $b);
    }
}