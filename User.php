<?php

/**
 * Пользователь
 */
abstract class User
{
    /**
     * @var int Идентификатор
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

}