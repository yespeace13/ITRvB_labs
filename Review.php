<?php

/**
 * Отзыв
 */
class Review
{
    private int $id;
    /**
     * @var Product Продукт, на который оставили отзыв
     */
    private Product $product;
    /**
     * @var string Отзыв
     */
    private string $review;
    /**
     * @var int Рейтинг
     */
    private int $rating;
    /**
     * @var Client Пользователь, оставивший отзыв
     */
    private Client $client;

}