<?php
/* Класс для работы с заказами (Формирует структуру вокруг таблицы БД = orders) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса Orders
namespace app\models;

class Orders // Формирование структуры класса
{
    // Свойства
    public $id; // ID заказа
    public $name; // Имя заказчика
    public $phone; // Телефон заказчика
    public $address; // Адрес заказчика
    public $session_id; // ID сессии

    // Методы
}