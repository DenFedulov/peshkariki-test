<?php

namespace Dfed\PeshkarikiTest\Utils;

use Dfed\PeshkarikiTest\Enums\DietType;
use Dfed\PeshkarikiTest\Enums\FoodType;

abstract class FoodUtils
{
    /**
     * @param string|FoodType $foodType
     * @param string|DietType $dietType
     * @return bool
     */
    public static function isEdible(string $foodType, string $dietType): bool
    {
        switch ($dietType) {
            case DietType::OMNIVORE:
                return true;
            case DietType::HERBIVORE:
                return $foodType === FoodType::VEGETABLE;
            case DietType::CARNIVORE:
                return $foodType === FoodType::MEAT;
            default:
                throw new \InvalidArgumentException('Unknown diet type: ' . $dietType);
        }
    }
}
