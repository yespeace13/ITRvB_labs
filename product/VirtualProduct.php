<?php

/**
 * Продукт не имеющий физического представления
 */
class VirtualProduct extends Product
{
    /**
     * @var string Формат товара
     */
    private string $formats;

    public function getFormats(): string
    {
        return $this->formats;
    }

    public function setFormats(string $formats): void
    {
        $this->formats = $formats;
    }
}