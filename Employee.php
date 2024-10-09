<?php

/**
 * Класс системных пользователей (Админы, сотрудники и т.д.)
 */
class Employee extends User
{
    private string $department;

    private float $salary;
}