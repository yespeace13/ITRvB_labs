<?php

/**
 * Пользователь
 */
class User
{
    /**
     * @var Идентификатор
     */
    private int $id;
    /**
     * @var string|null Имя
     */
    private ?string $firstName;
    /**
     * @var string|null Фамилия
     */
    private ?string $lastName;
    /**
     * @var string|null Электронная почта
     */
    private ?string $email;
    /**
     * @var string|null Адрес
     */
    private ?string $address;
    /**
     * @var string|null Номер телефона
     */
    private ?string $phone;

    public function __construct($id, $firstName, $lastName, $email, $address, $phone){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
    }
}