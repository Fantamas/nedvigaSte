<?php
defined('DOSTUP') or die('Access denied');
//подключение модели 
require_once MODEL;
//подключение библиотеки функция 
require_once "functions/functions.php";
//получение массива каталога




//должна быть выче чем функция регистрации а именно view=vhod
$view = empty($_GET['view']) ? 'search' : $_GET['view'];
$kview = empty($_GET['kview']) ? 'search' : $_GET['kview'];

//функции

//выход
//if(isset($_GET['exit'])){$exit=$_GET['exit'];}
if($_GET['exit']==true){	
		session_unset();
		unset($user_id);
		echo $_SESSION[user_id];}else {
		echo $_SESSION[user_id];
}
	

	
//вход
if(isset($_POST[vname]) && isset( $_POST[vpass])){
		$vname=$_POST[vname];
		$vpass= $_POST[vpass];
		
		$vhod=vhod($vname,$vpass);
		if($vhod!==0){
			session_start();
			$_SESSION[user_id]=$vhod[user_id];
			$user_id=$vhod[user_id];
			echo $_SESSION[user_id];
		}
}


//регистрация
if(isset(
		$_POST['name'] ,
		$_POST['second_name'],
		$_POST['email'],
		$_POST['phone_number'],
		$_POST['password']))
{
		$name=$_POST['name'];
		$second_name= $_POST['second_name'];
		$email=$_POST['email'];
		$phone_number=$_POST['phone_number'];
		$password=$_POST['password'];
			
		$result=reg($name,$second_name,$email,$phone_number,$password);
				
		if($result==true){
			echo 'ругистрация прошла успешно';
			echo 'вы можете войти в личный кабинет или вернуться <a href="index.php">на главную</a>';
			$view='vhod';}
		else{'ошибка регистрации.попробуйте позже';}
}


//заносим новый товар в базу
if(isset($_POST[newPr])){
	if(isset($_POST[user_id])){$user_id=$_POST[user_id];}
	if(isset($_POST[name])){$name=$_POST[name];}
	if(isset($_POST[categoriya])){$categoriya=$_POST[categoriya];}
	if(isset($_POST['key'])){$key=$_POST['key'];}
	if(isset($_POST[description])){$description=$_POST[description];}
	if(isset($_POST[image])){$image=$_POST[image];}
	if(isset($_POST[price])){$price=$_POST[price];}



	$result=newProd($user_id,$name,$categoriya,$image,$key,$description,$description,$price);
}





//$cat=spisok();
//$products=products();
	
if(isset($_GET[cat])){$cat=$_GET[cat];}else{$cat='vse';}

switch($view){
	case('search'):
		$products=products($cat);
		break;
	case('show'):
		//$id=abs((int)$_GET['id']);
		//$produc=showproduct($id);
		//$producc=show($idt);
		break;
}
		
		
//свич для кабинета
if(isset($kview)){
	switch($kview){
		case('search'):
			//$prod=spisok($user_id,$cat);
			//break;
		case('show'):
			$id=abs((int)$_GET['id']);
			//$produc=showproduct($id);
			//$producc=show($idt);
			break;
	}	
}



//пересмотреть костыль
$para= 'unknown3232';
$valu = 'unknown';
	foreach(array('p', 'k', 'o', 'a') as $param)
		if( isset($_GET[$param])){
			$para = $param;
			$valu = $_GET[$param];
			break;
		}
	echo $para;	
		
	
	
	
		
//require_once 'query.php';

//if (isset($_POST[query])){
//$fun=fun();
//exit;
//};
		
		
//подключение видов $kabinet==true
if($_SESSION[user_id]){
		require_once TEMPLATE.'kabinet/index.php';}else{
		require_once TEMPLATE.'index.php';
}
?>