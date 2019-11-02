<?php
/* Класс для работы с корзиной (Формирует структуру вокруг таблицы БД = basket) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса Basket
namespace app\models;

class Basket // Формирование структуры класса
{
    // Свойства
    public $id; // ID корзины
    public $session_id; // ID сессии
    public $goods_id; // ID товара

    // Методы
}