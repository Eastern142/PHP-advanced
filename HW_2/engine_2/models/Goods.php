<?php
/* Класс для работы с товарами (Формирует структуру вокруг таблицы БД = goods) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса Goods
namespace app\models;

class Goods extends GeneralModel // Формирование структуры класса (наследован от GeneralModel)
{
    // Свойства
    protected $id; // ID товара
    protected $image; // Изображение товара
    protected $name; // Наименование товара
    protected $price; // Стоимость товара
    protected $description; // Описание товара

    // Методы
    /** Метод формирования имени таблицы в БД
     * @return mixed|string Имя таблицы в БД
     */
    public function getTableName()
    {
        return "goods";
    }
}