<?php

namespace Dfed\PeshkarikiTest\Animal;

use Dfed\PeshkarikiTest\Animal\Classification\Arachnid;
use Dfed\PeshkarikiTest\Animal\Strategy\FemaleOviReproductionStrategy;
use Dfed\PeshkarikiTest\Animal\Strategy\MaleOviReproductionStrategy;
use Dfed\PeshkarikiTest\Enums\DietType;
use Dfed\PeshkarikiTest\Enums\SexType;

class HouseSpider extends Arachnid
{
    /**
     * @param  AnimalOptions $options
     * @return void
     */
    public function __construct(AnimalOptions $options)
    {
        parent::__construct($options, new AnimalSpecs(
            parent::CLASSIFICATION,
            DietType::CARNIVORE
        ));
        switch($options->getSexType()){
            case SexType::MALE:
                $this->reproductionStrategy = new MaleOviReproductionStrategy();
                break;
            case SexType::FEMALE:
                $this->reproductionStrategy = new FemaleOviReproductionStrategy();
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
