<?php

/* Точка входа в приложение */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
use app\engine\{Autoload, Db}; // Подключаем пространство имен директории engine
use app\models\{Product,
    Users,
    Basket,
    Feedback,
    Gallery,
    News,
    Orders}; // Подключаем пространство имен директории models

include_once "../engine/Autoload.php"; // Подключаем класс с методами автозагрузки моделей приложения

spl_autoload_register([new Autoload(), 'loadClass']); // Регистрируем класс и его метод автозагрузки моделей приложения
// в стеке автозагрузки

$basket = new Basket(); // Создаем Экземпляр/Объект класса Basket
$feedback = new Feedback(); // Создаем Экземпляр/Объект класса Feedback
$gallery = new Gallery(); // Создаем Экземпляр/Объект класса Gallery
$product = new Product(); // Создаем Экземпляр/Объект класса Product
$news = new News(); // Создаем Экземпляр/Объект класса News
$orders = new Orders(); // Создаем Экземпляр/Объект класса Orders
$users = new Users(); // Создаем Экземпляр/Объект класса Users

echo $basket;
var_dump($basket);
echo $feedback;
var_dump($feedback);
echo $gallery;
var_dump($gallery);
echo $product;
var_dump($product);
echo $news;
var_dump($news);
echo $orders;
var_dump($orders);
echo $users;
var_dump($users);