<?php

/**
 * Отзыв
 */
class Review
{
    /**
     * @var Product Продукт, на который оставили отзыв
     */
    private Product $_product;
    /**
     * @var string Отзыв
     */
    private string $review;
    /**
     * @var int Рейтинг
     */
    private int $rating;
    /**
     * @var User Пользователь, оставивший отзыв
     */
    private User $user;

}