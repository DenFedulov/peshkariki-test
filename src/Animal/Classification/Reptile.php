<?php

namespace Dfed\PeshkarikiTest\Animal\Classification;

use Dfed\PeshkarikiTest\Animal\BaseAnimal;
use Dfed\PeshkarikiTest\Enums\AnimalClassification;

abstract class Reptile extends BaseAnimal
{
    const CLASSIFICATION = AnimalClassification::REPTILE;
}
