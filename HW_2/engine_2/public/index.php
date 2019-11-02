<?php
/* Точка входа в приложение */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
use app\engine\{
    Autoload,
    Db
}; // Используем пространство имен директории engine для подключения классов <-
// use app\interfaces\IModels; // Используем пространство имен директории interfaces для подключения класса IModels <-
use app\models\{
    Basket,
    Feedback,
    Gallery,
    Goods,
    News,
    Orders,
    Users
}; // Используем пространство имен директории models для подключения классов <-

include_once "../engine/Autoload.php"; // Подключаем класс с методами автозагрузки моделей приложения

spl_autoload_register([new Autoload(), 'loadClass']); // Регистрируем класс и его метод автозагрузки моделей приложения
// в стеке автозагрузки

$product = new Goods(new Db()); // Создаем экземпляр класса Goods.
// Параметром передаем экземпляр класса Db
echo $product->getOneItem(1); // Запрашиваем и отображаем результат выполнения метода
echo $product->getAllItem(); // Запрашиваем и отображаем результат выполнения метода
var_dump($product);

$users = new Users(new Db()); // Создаем экземпляр класса Users.
// Параметром передаем экземпляр класса Db
echo $users->getOneItem(2); // Запрашиваем и отображаем результат выполнения метода
echo $users->getAllItem(); // Запрашиваем и отображаем результат выполнения метода
var_dump($users);

/* Пример полиморфизма
function foo(IModels $model) {
    return $model->getTableName();
}

echo foo($product);
echo foo($users);
*/