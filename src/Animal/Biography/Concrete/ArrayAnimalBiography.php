<?php

namespace Dfed\PeshkarikiTest\Animal\Biography\Concrete;

use Dfed\PeshkarikiTest\Animal\Biography\Interface\AnimalBiography;

class ArrayAnimalBiography implements AnimalBiography
{
    private string $name;
    private array $entries = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addEntry(string $massage): void
    {
        $this->entries[] = 'Биография ' . $this->name . ' - ' . $massage;
    }

    public function getEntries(): array
    {
        return $this->entries;
    }
}