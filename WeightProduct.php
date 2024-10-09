<?php

/**
 * Продукт не имеющий физического представления
 */
class WeightProduct extends Product
{
    private float $weight;

    public function calculateCost(): float
    {
        return $this->price * $this->weight;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }
}