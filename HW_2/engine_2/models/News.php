<?php
/* Класс для работы с новостями (Формирует структуру вокруг таблицы БД = news) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса News
namespace app\models;

class News // Формирование структуры класса
{
    // Свойства
    public $id; // ID новости
    public $title; // Оглавление новости
    public $preview; // Короткое описание
    public $full; // Полное описание

    // Методы
}