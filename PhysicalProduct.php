<?php
/**
 * Продукт не имеющий физического представления
 */
class PhysicalProduct extends Product
{
    private int $count;

    public function calculateCost(): float
    {
        return $this->price * $this->count;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }
}