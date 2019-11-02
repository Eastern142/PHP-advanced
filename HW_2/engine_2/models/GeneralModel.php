<?php
/* Класс для сбора общих Свойств/Методов для всех моделей */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса GeneralModel
namespace app\models;

use app\engine\Db; // Используем пространство имен директории engine, для доступа к классу Db
use app\interfaces\IModels; // Используем пространство имен директории interfaces, для доступа к классу IModels

abstract class GeneralModel implements IModels // Формирование структуры класса
// (Создание экземпляров класса ЗАПРЕЩЕНО (abstract)) (Реализует интерфейс IModels)
{
    // Свойства
    protected $db; // Свойство для экземпляра класса Db

    // Методы
    /** GeneralModel constructor.
     * @param Db $db - Экземпляр класса Db (Передается из public/index.php)
     * (Db - явное указание экземпляр какого именно класс должен быть создан)
     */
    public function __construct(Db $db)
    {
        $this->db = $db; // Свойству $db присваиваем экземпляр класса Db
    }

    /** Метод запрашивает результат выполнения SQL запроса у экземпляра класса Db для одной позиции
     * @param $id - ID позиции для формирования SQL запроса
     * @return mixed - ...
     */
    public function getOneItem($id)
    {
        $tableName = $this->getTableName(); // Присваиваем переменной значение имени таблицы (Передается наследниками)
        $sql = "SELECT * FROM `{$tableName}` WHERE `id` = {$id}"; // Формируем запрос на получение позиции по ID
        return $this->db->queryOne($sql);
    }

    /** Метод запрашивает результат выполнения SQL запроса у экземпляра класса Db для всех позиций
     * @return mixed - ...
     */
    public function getAllItem()
    {
        $tableName = $this->getTableName(); // Присваиваем переменной значение имени таблицы (Передается наследниками)
        $sql = "SELECT * FROM `{$tableName}`"; // Формируем запрос на получение всех позиций
        return $this->db->queryOne($sql);
    }

    /** Обязуем реализовать метод в наследниках (abstract)
     * @return mixed Имя таблицы в БД переданное наследником
     */
    abstract public function getTableName();
}