<?php
// FRONT CONTROLLER

// Вывод ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Подключение файлов системы
define('ROOT', dirname(__FILE__));
include ROOT . '/components/Router.php';
// Автозагрузка классов
include ROOT . '/components/Autoload.php';



$router = new Router();
$router->run();