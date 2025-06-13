<?php

namespace Dfed\PeshkarikiTest\Animal;

use Dfed\PeshkarikiTest\Animal\Classification\Mammal;
use Dfed\PeshkarikiTest\Animal\Strategy\FemaleViviReproductionStrategy;
use Dfed\PeshkarikiTest\Animal\Strategy\MaleViviReproductionStrategy;
use Dfed\PeshkarikiTest\Enums\DietType;
use Dfed\PeshkarikiTest\Enums\SexType;

class Gazelle extends Mammal
{
    /**
     * @param  AnimalOptions $options
     * @return void
     */
    public function __construct(AnimalOptions $options)
    {
        parent::__construct($options, new AnimalSpecs(
            parent::CLASSIFICATION,
            DietType::HERBIVORE
        ));
        switch($options->getSexType()){
            case SexType::MALE:
                $this->reproductionStrategy = new MaleViviReproductionStrategy();
                break;
            case SexType::FEMALE:
                $this->reproductionStrategy = new FemaleViviReproductionStrategy();
                break;
            default:
                throw new \InvalidArgumentException('Inknown sex type for ' . self::class . ': ' . $options->getSexType());  
                break;
        }
    }

    public function advanceAge(): void
    {
        // TODO
    }

    public function decreaseSatiation(): void
    {
        // TODO
    }

    public function eat(): void
    {
        // TODO
    }

    public function move(): void
    {
        // TODO
    }
}
