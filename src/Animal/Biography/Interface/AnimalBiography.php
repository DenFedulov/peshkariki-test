<?php

namespace Dfed\PeshkarikiTest\Animal\Biography\Interface;

interface AnimalBiography
{
    public function getName(): string;

    public function addEntry(string $massage): void;

    /**
     * @return string[]
     */
    public function getEntries(): array;
}