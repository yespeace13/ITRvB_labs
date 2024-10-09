<?php
/**
 * Покупатель
 */
//todo getters and setters
class Client extends User
{
    /**
     * @var array|null Заказы клиента
     */
    private ?array $orders;
    /**
     * @var array|null Отзывы клиента
     */
    private ?array $reviews;

    public function addOrder(Order $order)
    {
        $this->orders[] = $order;
    }

    public function addReview(Review $review){
        $this->reviews[] = $review;
    }
}