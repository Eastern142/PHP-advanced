<?php

/* Класс для работы с товарами (Формирует структуру вокруг таблицы БД = goods) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Пространство имен класса Product
namespace app\models;

class Product // Формирование структуры класса
{
    // Свойства

    public $id; // ID товара
    public $image; // Изображение товара
    public $name; // Наименование товара
    public $price; // Стоимость товара
    public $description; // Описание товара

    // Методы

    /* Пример __toString */
    public function __toString()
    {
        return "Я класс Продукты (Product)";
    }
}