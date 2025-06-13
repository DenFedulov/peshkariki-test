<?php

namespace Dfed\PeshkarikiTest\Repository\Interface;

use Dfed\PeshkarikiTest\Aviary;

interface AviaryRepository
{
    /**
     * @return Aviary[]
     */
    public function getAll(): array;

    public function getById(int $id): Aviary;

    public function save(Aviary $aviary): void;

    public function add(Aviary $aviary): void;

    public function delete(int $id): bool;
}