<?php

/* Класс для работы с отзывами (Формирует структуру вокруг таблицы БД = feedback) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Пространство имен класса Feedback
namespace app\models;


class Feedback // Формирование структуры класса
{
    // Свойства

    public $id; // ID отзыва
    public $name; // Имя пользователя
    public $feedback; // Отзыв

    // Методы

    /* Пример __toString */
    public function __toString()
    {
        return "Я класс Отзывы (Feedback)";
    }
}