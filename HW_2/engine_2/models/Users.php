<?php
/* Класс для работы с пользователями (Формирует структуру вокруг таблицы БД = users) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем ространство имен класса Users
namespace app\models;

class Users extends GeneralModel // Формирование структуры класса (наследован от GeneralModel)
{
    // Свойства
    protected $id; // ID пользователя
    protected $login; // Логин пользователя
    protected $password; // Пароль пользователя
    protected $hash; // Хеш пользователя

    // Методы
    /** Метод формирования имени таблицы в БД
     * @return mixed|string Имя таблицы в БД
     */
    public function getTableName()
    {
        return "users";
    }
}