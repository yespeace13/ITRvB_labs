<?php

/**
 * Продукт
 */
abstract class Product
{
    /**
     * @var int Идентификатор
     */
    private int $id;
    /**
     * @var string Название
     */
    private string $name;
    /**
     * @var string Описание
     */
    private string $description;
    /**
     * @var int Цена
     */
    private int $price;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
}