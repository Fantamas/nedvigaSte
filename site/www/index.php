<?
echo 'hi';
//этот файл -точка входа
//запрет прямого обращения
define('DOSTUP','TRUE');

//подключение файла конфигурации
require_once 'config.php';
require_once CONTROLLER;
?>
