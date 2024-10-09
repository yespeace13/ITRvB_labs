<?php

/**
 * Продукт не имеющий физического представления
 */
class VirtualProduct extends Product
{
    public function calculateCost(): float
    {
        return $this->price / 2;
    }
}