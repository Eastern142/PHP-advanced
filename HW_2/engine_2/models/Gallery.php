<?php

/* Класс для работы с галереей (Формирует структуру вокруг таблицы БД = gallery) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Пространство имен класса Gallery
namespace app\models;


class Gallery // Формирование структуры класса
{
    // Свойства

    public $id; // ID изображения
    public $filename; // Имя файла
    public $likes; // Количество лайков

    // Методы

    /* Пример __toString */
    public function __toString()
    {
        return "Я класс Галереи (Gallery)";
    }
}