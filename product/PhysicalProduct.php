<?php

/**
 * Продукт не имеющий физического представления
 */
class PhysicalProduct extends Product
{
    /**
     * @var int Количество
     */
    private int $count;

    /**
     * @return bool Проверка для наличия продукции
     */
    public function isExist()
    {
        if ($this->count != 0) {
            return true;
        }
        return false;
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