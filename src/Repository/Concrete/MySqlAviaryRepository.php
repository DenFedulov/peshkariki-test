<?php

namespace Dfed\PeshkarikiTest\Repository\Concrete;

use Dfed\PeshkarikiTest\Aviary;
use Dfed\PeshkarikiTest\Enums\FoodType;
use Dfed\PeshkarikiTest\Repository\Interface\AviaryRepository;
use Dfed\PeshkarikiTest\Storage\Database;

class MySqlAviaryRepository implements AviaryRepository
{
    private Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll(): array
    {
        // TODO
        return [];
    }

    public function getById(int $id): Aviary
    {
        // TODO
        return new Aviary(FoodType::MEAT, false, false, false, 0);
    }

    public function add($aviary): void
    {
        // TODO
    }

    public function save($aviary): void
    {
        // TODO
    }

    public function delete(int $id): bool
    {
        // TODO
        return true;
    }
}
