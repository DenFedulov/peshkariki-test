<?php

namespace Dfed\PeshkarikiTest;

use Dfed\PeshkarikiTest\Enums\FoodType;

class Aviary // Вольер
{
    private int $id;

    /**
     * @var string|FoodType
     */
    private string $foodType;
    private int $foodAvailable = 0;

    private bool $isVisitable = false;
    private bool $isOpen = false;
    private bool $isRoofed = false;

    public function __construct(
        string $foodType,
        bool $isVisitable = false,
        bool $isOpen = false,
        bool $isRoofed = false,
        int $foodAvailable = 0,
    ) {
        $this->foodType = $foodType;

        $this->isVisitable = $isVisitable;
        $this->isOpen = $isOpen;
        $this->isRoofed = $isRoofed;

        $this->foodAvailable = $foodAvailable;
    }

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param  int $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getFoodType(): string
    {
        return $this->foodType;
    }

    /**
     * @param  string $foodType
     * @return self
     */
    public function setFoodType(string $foodType): self
    {
        $this->foodType = $foodType;
        return $this;
    }

    public function getFoodAvailable(): int
    {
        return $this->foodAvailable;
    }

    /**
     * @param  int $foodAvailable
     * @return self
     */
    public function setFoodAvailable(int $foodAvailable): self
    {
        $this->foodAvailable = $foodAvailable;
        return $this;
    }

    public function isVisitable(): bool
    {
        return $this->isVisitable;
    }

    /**
     * @param  bool $isVisitable
     * @return self
     */
    public function setIsVisitable(bool $isVisitable): self
    {
        $this->isVisitable = $isVisitable;
        return $this;
    }

    public function isOpen(): bool
    {
        return $this->isOpen;
    }

    /**
     * @param  bool $isOpen
     * @return self
     */
    public function setIsOpen(bool $isOpen): self
    {
        $this->isOpen = $isOpen;
        return $this;
    }

    public function isRoofed(): bool
    {
        return $this->isRoofed;
    }

    /**
     * @param  bool $isRoofed
     * @return self
     */
    public function setIsRoofed(bool $isRoofed): self
    {
        $this->isRoofed = $isRoofed;
        return $this;
    }
}
