<?php

namespace jkliru\Strategy;

interface OperationInterface
{
    public function calculate(int $a, int $b): int;
}