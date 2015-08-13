<?php 
// Соединяемся с сервером базы данных
  $dbcnx = @mysql_connect(SERVER,USER,PASSWORD);
  if (!$dbcnx) exit("<P>В настоящий момент сервер базы данных не доступен, поэтому корректное отображение страницы невозможно.</P>");

// Выбираем базу данных
  if (!@mysql_select_db(DB,$dbcnx)) exit("<P>В настоящий момент база данных не доступна, поэтому корректное отображение страницы невозможно.</P>");

// Определяем версию сервера
  $ver = mysql_query("SELECT VERSION()");
  if(!$ver) exit("Ошибка при определении версии MySQL-сервера");
  $version = mysql_result($ver, 0);
  list($major, $minor) = explode(".", $version);
  
// Если версия выше 4.1 сообщаем серверу, что будем работать с кодировкой utf8
  $ver = $major.".".$minor;
  if((float)$ver >= 4.1)
  {
    mysql_query("SET NAMES 'utf8'");
//		mysql_query("SET NAMES 'utf8'");
		mysql_query ("set character_set_client='utf8'");
		mysql_query ("set character_set_results='utf8'");
		mysql_query ("set collation_connection='utf8_general_ci'");


  }
?>
