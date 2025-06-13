<?php

namespace Dfed\PeshkarikiTest\Repository\Concrete;

use Dfed\PeshkarikiTest\Animal\AnimalOptions;
use Dfed\PeshkarikiTest\Animal\BaseAnimal;
use Dfed\PeshkarikiTest\Animal\Bear;
use Dfed\PeshkarikiTest\Animal\Biography\Concrete\ArrayAnimalBiography;
use Dfed\PeshkarikiTest\Animal\Crocodile;
use Dfed\PeshkarikiTest\Aviary;
use Dfed\PeshkarikiTest\Enums\FoodType;
use Dfed\PeshkarikiTest\Enums\SexType;
use Dfed\PeshkarikiTest\Repository\Interface\AnimalRepository;
use Dfed\PeshkarikiTest\Storage\Database;

class MySqlAnimalRepository implements AnimalRepository
{
    private Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll(): array
    {
        // тестовые животные
        $animals = [
            new Bear(
                new AnimalOptions(
                    1,
                    'Misha',
                    100,
                    5,
                    true,
                    new Aviary(FoodType::MEAT),
                    SexType::MALE,
                    new ArrayAnimalBiography('Misha 1')
                )
            ),
            new Crocodile(
                new AnimalOptions(
                    2,
                    'Croc',
                    40,
                    5,
                    true,
                    new Aviary(FoodType::MEAT),
                    SexType::MALE,
                    new ArrayAnimalBiography('Croc 2')
                )
            ),
        ];
        return $animals;
    }

    public function save(BaseAnimal $animal): void
    {
        // TODO
        echo "Состояние животного сохранено" . PHP_EOL;
    }

    public function add(BaseAnimal $animal): void
    {
        // TODO
        echo "Животное добавлено" . PHP_EOL;
    }

    public function delete(int $id): bool
    {
        // TODO
        return true;
    }
}
