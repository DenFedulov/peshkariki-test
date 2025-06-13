<?php

namespace Dfed\PeshkarikiTest\Animal\Strategy;

use Dfed\PeshkarikiTest\Animal\Behavior\ReproductionStrategy;

class MaleViviReproductionStrategy implements ReproductionStrategy
{
    public function reproduce(): string
    {
        return 'Ищет самку и справивается';
    }
}