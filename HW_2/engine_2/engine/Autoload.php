<?php

/* Класс автозагрузки моделей приложения */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Пространство имен класса Autoload
namespace app\engine;

class Autoload
{
    // Свойства

    // Методы

    /** Метод загрузки моделей приложения (Вызывается из public/index.php)
     * @param $className - Имя модели для подключения (Передается из public/index.php)
     */
    public function loadClass($className)
    {
        $checkPath = $this->correctPath($className); // Присваиваем переменной метод корректировки пути к файлу
        $fileName = "{$checkPath}.php"; // Дописываем расширение подключаемого файла
        if (file_exists($fileName)) { // Если файл найден
            include $fileName; // Подключаем файл
        }
    }

    /**
     * Метод корректировки пути к файлу
     * @param $className - Имя модели для подключения (Передается из Autoload()->loadClass)
     * @return mixed - Корректный путь к файлу
     */
    public function correctPath($className)
    {
        $correctPath = str_replace("\\", "/", $className); // Меняем обратный слеш на прямой
        return str_replace("app", "..", $correctPath); // Меняем "app" на ".." и возвращаем корректный путь
    }
}