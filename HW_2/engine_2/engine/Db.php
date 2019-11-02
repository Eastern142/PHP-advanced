<?php
/* Класс для работы с базой данных */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса Db
namespace app\engine;

class Db // Формирование структуры класса
{
    // Свойства

    // Методы
    /** Метод возвращает результат выполнения запроса для одного значения в БД
     * @param $sql - Запрос к БД
     * @param array $params - Массив параметров
     * @return mixed - ...
     */
    public function queryOne($sql, $params = [])
    {
        return $sql;
    }

    /** Метод возвращает результат выполнения запроса для всех значений в БД
     * @param $sql - Запрос к БД
     * @param array $params - Массив параметров
     * @return mixed - ...
     */
    public function queryAll($sql, $params = [])
    {
        return $sql;
    }
}