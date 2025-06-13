<?php

namespace Dfed\PeshkarikiTest\Repository\Interface;

use Dfed\PeshkarikiTest\Animal\BaseAnimal;

interface AnimalRepository
{
    /**
     * @return BaseAnimal[]
     */
    public function getAll(): array;

    public function save(BaseAnimal $animal): void;

    public function add(BaseAnimal $animal): void;

    public function delete(int $id): bool;
}