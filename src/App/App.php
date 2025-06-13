<?php

namespace Dfed\PeshkarikiTest\App;

use Dfed\PeshkarikiTest\Logging\Interface\Logger;
use Dfed\PeshkarikiTest\Repository\Interface\AnimalRepository;

/**
 * Пример как приложение может использовать архитектуру животных,
 * логировать и связываться с БД
 */
class App
{
    private Logger $logger;

    private AnimalRepository $animalRepository;

    public function __construct(
        Logger $logger,
        AnimalRepository $animalRepository
    ) {
        $this->logger = $logger;
        $this->animalRepository = $animalRepository;
    }

    public function run(): void
    {
        $this->logger->log('Приложение запущено');

        $animals = $this->animalRepository->getAll();
        $this->logger->log('Получено ' . count($animals) . ' животных');

        foreach ($animals as $animal) {
            $this->logger->log('Ход животного ' . $animal->getId());
            $animal->turn();
            foreach ($animal->getBiography()->getEntries() as $entry) {
                $this->logger->log($entry);
            }
            $this->animalRepository->save($animal);
            $this->logger->log('Животное ' . $animal->getId() . ' сохранено');
            $this->logger->log('Ход животного ' . $animal->getId() . ' завершен');
        }

        $this->logger->log('Приложение завершено');
    }
}
