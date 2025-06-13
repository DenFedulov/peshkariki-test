<?php

namespace Dfed\PeshkarikiTest\Animal\Strategy;

use Dfed\PeshkarikiTest\Animal\Behavior\ReproductionStrategy;

class MaleOviReproductionStrategy implements ReproductionStrategy
{
    public function reproduce(): string
    {
        return 'Оплодотворяет яйца';
    }
}