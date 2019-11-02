<?php
/* Класс интерфейса */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса GeneralModel
namespace app\interfaces;

interface IModels // Формирование структуры класса (Реализуется в GeneralModel)
{
    // Свойства

    // Методы
    /** Метод выполнения SQL запроса для одной позиции
     * @param $id -
     */
    public function getOneItem($id);

    /** Метод выполнения SQL запроса для всех позиций
     */
    public function getAllItem();

    /** Метод формирования имени таблицы в БД
     */
    public function getTableName();
}