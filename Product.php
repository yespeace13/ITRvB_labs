<?php

/**
 * Продукт
 */
abstract class Product
{
    /**
     * @var int Идентификатор
     */
    protected int $id;
    /**
     * @var string Название
     */
    protected string $name;
    /**
     * @var string Описание
     */
    protected string $description;
    /**
     * @var int Цена
     */
    protected int $price;

    public abstract function calculateCost(): float;

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
}