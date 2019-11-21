<?php
/* Точка входа в приложение */

/* app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>) */

/* Используем пространства имен директории engine, models для доступа к необходимым классам */

use app\engine\{
    Autoload,
    Db
};
use app\models\{
    Basket,
    Feedback,
    Gallery,
    Goods,
    News,
    Orders,
    Users
};

/* realpath формирует абсолютный путь */
require_once realpath("../config/config.php"); /* Подключаем файл конфигурации */
require_once realpath("../engine/Autoload.php"); /* Подключаем класс с методами автозагрузки моделей приложения */

/* Регистрируем класс и его метод автозагрузки моделей приложения
 * в стеке автозагрузки (--> engine/Autoload.php -> loadClass(...)) */
spl_autoload_register([new Autoload(), 'loadClass']);

$url = explode('/', $_SERVER['REQUEST_URI']); /* Разбиваем URL на массив значений по разделителю ( / ) */
$controllerName = empty($url[1]) ? 'goods' : $url[1]; /* Считываем имя запрашиваемого контроллера (из URL) */
$actionName = $url[2]; /* Считываем имя запрашиваемого экшена (из URL) */

/* Формируем путь к контроллеру */
$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) { /* Если класс контроллера существует в указанной директории */
    $controller = new $controllerClass(); /* Создаем экземпляр класса запрашиваемого контроллера */
    $controller->runAction($actionName); /* Обращаемся к методу запуска экшена */
} else { /* В протианом случае */
    echo "404 Controller Not Found"; /* Сообщаем пользователю об ошибке */
}

///** @var Goods $goods - экземпляр класса Goods */
//(new Goods('GT76TITAN1.png', 'MSI GT76 TITAN', 2800, 'Самый мощный в серии «Титанов».'))->insert();
//$goods = new Goods('GT76TITAN1.png', 'MSI GT76 TITAN', 2800, 'Самый мощный в серии «Титанов».');
//$goods = Goods::getOneItem(1);
//$goods->save();

//var_dump($goods);
//var_dump(get_class_methods($goods));

/* Пример полиморфизма
function foo(IModels $model) {
    return $model->getTableName();
}
echo foo($product);
echo foo($users); */