<?php

/**
 * Корзина
 */
class Order
{
    /**
     * @var array Товары
     */
    private array $products = [];

    /**
     * Добавляем товар в корзину
     * @param Product $product
     * @return void
     */
    public function addProduct(Product $product)
    {
        $this->products[$product->getId()] = $product;
    }

    /**
     * Удаляем продукт
     * @param Product $product
     * @return void
     */
    public function deleteProduct(Product $product)
    {
        unset($this->products[$product->getId()]);
    }

    /**
     * @return int Подсчет общей суммы
     */
    public function calculate(): int
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPrice();
        }
        return $sum;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

}