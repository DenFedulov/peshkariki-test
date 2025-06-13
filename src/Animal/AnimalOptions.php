<?php

namespace Dfed\PeshkarikiTest\Animal;

use Dfed\PeshkarikiTest\Animal\Biography\Interface\AnimalBiography;
use Dfed\PeshkarikiTest\Aviary;
use Dfed\PeshkarikiTest\Enums\SexType;

/**
 * Класс содержит свойства животного,
 * относящиеся к конкретному животному.
 * 
 * В случае если в будущем потребуется расширить
 * имеющиеся свойства (например добавить вес животного), 
 * этот класс позволит это сделать без правок в дочерних классах.
 */
class AnimalOptions
{
    public int $id;
    public string $nickname;
    public int $satiation;
    public int $age;
    public bool $isAlive;
    public Aviary $aviary;
    /** @var string|SexType */
    public string $sex;
    public AnimalBiography $biography;

    /**
     * @param int $id
     * @param string $nickname
     * @param int $satiation
     * @param int $age
     * @param bool $isAlive
     * @param Aviary $aviary
     * @param string|SexType $sex
     * @param AnimalBiography $biography
     */
    public function __construct(
        int $id,
        string $nickname,
        int $satiation,
        int $age,
        bool $isAlive,
        Aviary $aviary,
        string $sex,
        AnimalBiography $biography
    ) {
        $this->id = $id;
        $this->nickname = $nickname;
        $this->satiation = $satiation;
        $this->age = $age;
        $this->isAlive = $isAlive;
        $this->aviary = $aviary;
        $this->sex = $sex;
        $this->biography = $biography;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
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

    public function getSatiation(): int
    {
        return $this->satiation;
    }

    public function setSatiation(int $satiation): self
    {
        $this->satiation = $satiation;
        return $this;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }

    public function getIsAlive(): bool
    {
        return $this->isAlive;
    }

    public function setIsAlive(bool $isAlive): self
    {
        $this->isAlive = $isAlive;
        return $this;
    }

    public function getAviary(): Aviary
    {
        return $this->aviary;
    }

    public function setAviary(Aviary $aviary): self
    {
        $this->aviary = $aviary;
        return $this;
    }

    /**
     * @return string|SexType
     */
    public function getSexType(): string
    {
        return $this->sex;
    }

    /**
     * @param string|SexType $sex
     * @return $this
     */
    public function setSexType(string $sex): self
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * @return  AnimalBiography
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * @param AnimalBiography $biography 
     * @return self
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;
        return $this;
    }
}
