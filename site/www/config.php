<?php
defined('DOSTUP') or die('Access denied');
// домен
define('PATH','http://site/');

//подключение MVC
	//модель
	define('MODEL','model/model.php');
	//контроллер
	define('CONTROLLER','controller/controller.php');
	//виды
	define('VIEW','views/');
	// активный шаблон
	define('TEMPLATE',VIEW.'ishop/');

//Соединение с БД
	require_once 'options.php';
	require_once 'connect.php';





//название 
define('TITLE','Интернет магазин фиг пойми чего');


?>