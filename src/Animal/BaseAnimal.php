<?php

namespace Dfed\PeshkarikiTest\Animal;

use Dfed\PeshkarikiTest\Animal\Behavior\ReproductionStrategy;
use Dfed\PeshkarikiTest\Animal\Biography\Interface\AnimalBiography;
use Dfed\PeshkarikiTest\Aviary;
use Dfed\PeshkarikiTest\Enums\SexType;
use Dfed\PeshkarikiTest\Utils\FoodUtils;

abstract class BaseAnimal
{
    protected int $id;
    protected string $nickname;

    protected int $satiation;
    const SATIATION_MAX = 100;

    protected int $age;
    const AGE_MAX = 30;

    protected bool $isAlive;
    protected Aviary $aviary;

    /** @var string|SexType */
    protected string $sex;

    const CLASSIFICATION = '';
    protected AnimalSpecs $specifications;

    protected AnimalBiography $biography;

    abstract public function advanceAge(): void;
    abstract public function decreaseSatiation(): void;
    abstract public function eat(): void;
    abstract public function move(): void;
    protected ReproductionStrategy $reproductionStrategy;

    public function turn(): void
    {
        if (!$this->isAlive) {
            return;
        }

        $this->advanceAge();
        $this->biography->addEntry(
            'Животное постарело.'
        );
        if ($this->age > self::AGE_MAX) {
            $this->isAlive = false;
            $this->biography->addEntry(
                'Животное умерло от старости.'
            );
            return;
        }

        $this->decreaseSatiation();
        $this->biography->addEntry(
            'Животное проголодалось.'
        );
        if ($this->satiation < 0) {
            $this->isAlive = false;
            $this->biography->addEntry(
                'Животное умерло от голода.'
            );
            return;
        }

        if (FoodUtils::isEdible($this->aviary->getFoodType(), $this->specifications->getDiet())) {
            $this->eat();
            $this->biography->addEntry(
                'Животное поело.'
            );
        }
        $this->move();
        $this->biography->addEntry(
            'Животное переместилось.'
        );
        $this->biography->addEntry(
            $this->reproductionStrategy->reproduce()
        );
    }

    /**
     * @param  AnimalOptions $options
     * @param  AnimalSpecs $specifications
     * @return void
     */
    public function __construct(
        AnimalOptions $options,
        AnimalSpecs $specifications,
    ) {
        $this->id = $options->id;
        $this->nickname = $options->nickname;
        $this->sex = $options->sex;
        $this->satiation = $options->satiation;
        $this->age = $options->age;
        $this->aviary = $options->aviary;
        $this->isAlive = $options->isAlive;
        $this->biography = $options->biography;
        $this->specifications = $specifications;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): self
    {
        $this->nickname = $nickname;
        return $this;
    }

    public function getSexType(): string
    {
        return $this->sex;
    }

    public function getSatiation(): int
    {
        return $this->satiation;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function isAlive(): bool
    {
        return $this->isAlive;
    }

    /**
     * Get the value of biography
     *
     * @return  AnimalBiography
     */
    public function getBiography()
    {
        return $this->biography;
    }
}
