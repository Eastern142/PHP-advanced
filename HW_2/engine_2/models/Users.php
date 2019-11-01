<?php

/* Класс для работы с пользователями (Формирует структуру вокруг таблицы БД = users) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Пространство имен класса Users
namespace app\models;

class Users // Формирование структуры класса
{
    // Свойства

    public $id; // ID пользователя
    public $login; // Логин пользователя
    public $password; // Пароль пользователя
    public $hash; // Хеш пользователя

    // Методы

    /* Пример __toString */
    public function __toString()
    {
        return "Я класс Пользователи (Users)";
    }
}