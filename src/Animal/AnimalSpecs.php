<?php

namespace Dfed\PeshkarikiTest\Animal;

/**
 * Класс содержит неизменяемые свойства животного,
 * относящиеся к конкретному виду.
 * 
 * В случае если в будущем потребуется расширить
 * спецификацию животного, например добавить
 * информацию ядовитости или о способности к полету,
 * здесь это можно будет сделать без рефакторинга
 * парамертов конструктора всех классов животных,
 * а только добавив правки в передаваемые аргументы
 * при создании экземпляра класса AnimalSpecs.
 */
class AnimalSpecs
{
    /** @var string|AnimalClassification */
    private string $classification;

    /** @var string|DietType */
    private string $diet;

    /**
     * @param string|AnimalClassification $classification 
     * @param string|DietType $diet
     */
    public function __construct(
        string $classification,
        string $diet
    ) {
        $this->classification = $classification;
        $this->diet = $diet;
    }

    /**
     * Get the value of classification
     *
     * @return string|AnimalClassification
     */
    public function getClassification()
    {
        return $this->classification;
}

    /**
     * Get the value of diet
     *
     * @return  string|DietType
     */
    public function getDiet()
    {
        return $this->diet;
}
}
