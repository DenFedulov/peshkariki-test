<?php

namespace Dfed\PeshkarikiTest\Animal\Classification;

use Dfed\PeshkarikiTest\Animal\BaseAnimal;
use Dfed\PeshkarikiTest\Enums\AnimalClassification;

abstract class Mammal extends BaseAnimal
{
    const CLASSIFICATION = AnimalClassification::MAMMAL;
}
