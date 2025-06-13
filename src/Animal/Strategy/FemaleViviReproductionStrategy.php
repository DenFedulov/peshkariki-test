<?php

namespace Dfed\PeshkarikiTest\Animal\Strategy;

use Dfed\PeshkarikiTest\Animal\Behavior\ReproductionStrategy;

class FemaleViviReproductionStrategy implements ReproductionStrategy
{
    public function reproduce(): string
    {
        return 'Рожает';
    }
}