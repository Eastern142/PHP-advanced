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
        $replace = [ // Ассоциативный массив замен, где: Ключ - Что меняем; Значение - На что меняем
            'app' => '..',
            '\\' => '/'
        ];
        $correctPath = str_replace(array_keys($replace), array_values($replace), $className); // Формируем корректный
        // путь к файлу
        $fileName = "{$correctPath}.php"; // Формируем корректное имя
        if (file_exists($fileName)) { // Если файл найден
            include $fileName; // Подключаем файл
        }
    }
}