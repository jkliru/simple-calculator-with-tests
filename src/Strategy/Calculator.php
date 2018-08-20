<?php

namespace jkliru\Strategy;

/**
 *
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

    public function calculate(int $a, int $b): int {
        return $this->strategy->calculate($a, $b);
    }
}