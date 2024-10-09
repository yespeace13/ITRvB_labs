<?php

/**
 * Корзина
 */
class Basket
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
    public function addProduct(Product $product){
        $this->products[$product->getId()] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

}