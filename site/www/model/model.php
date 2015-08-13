<?php
//функция получения списка категорий
// hz.php

function spisok($user_id,$cat){
	if($cat=='vse'){
		$query="SELECT * FROM products WHERE `user_id`='$user_id'";}else{
		$query="SELECT * FROM products WHERE `user_id`='$user_id' AND cat='$cat'";
	}
		$res=mysql_query($query) or die(mysql_query());
		$cat=array();	//яное объявление массива
		while($row=mysql_fetch_assoc($res)){
				$cat[]=$row;
		}
return $cat;
}
	
	
//получение массива товаров
//search.php

function products(){
	$query="SELECT * FROM flats";
	$res=mysql_query($query) or die(mysql_query());
		$products=array();
			while($row=mysql_fetch_assoc($res)){
					$products[]=$row;
				}
		return $products;
	}
	

//полная инфа об объекте
//show.php


//    переменную для таблиц которые нужно выводить

/*function showproduct($idt){
	$query="SELECT * FROM flats WHERE id =$idt";
	$res=mysql_query($query) or die(mysql_query());
	$produc=array();
	$row=mysql_fetch_assoc($res);
	$produc[]=$row;
	
	$uid=$row[user_id_fk] or die(сука);//получение из массива id для получения массива загрузок
		
	function show($uid){
		$q = "SELECT * FROM  user_uploads WHERE user_id_fk = $uid";
		$r6 = mysql_query($q) or die (mysql_query());
		$producc=array();
			while($rrw=mysql_fetch_assoc($r6)){
				$producc[]=$rrw;
				}
		return $producc;
	}
	return $produc;
}*/
function fun(){
	

$query=$_POST[query];
	$res=mysql_query($query) or die(mysql_query());
		$countries=array();
			while($row=mysql_fetch_assoc($res)){
					$countries[]=$row;
					
				echo json_encode($countries);
				};




}


function vhod($vname,$vpass){
	$query="SELECT * FROM users WHERE `email`='$vname' AND `password`= '$vpass'";
	$res=mysql_query($query) or die(mysql_query());
	$vhod=mysql_fetch_assoc($res);
return $vhod;
}
	
function reg($name,$second_name,$email,$phone_number,$password){

//костыли со страницы-пригодятся
//header("location:".$_SERVER['HTTP_REFERER']);
//перед header("location:".$_SERVER['HTTP_REFERER']);
//нельзя ничего выводит,будет варнинг и все станет
//$url = $_SERVER['HTTP_REFERER'];
//echo $url;
//$url = 'http://lex/index.php';
		$query = "SELECT * FROM `users`ORDER BY `user_id` DESC LIMIT 1";
		$r = mysql_query($query) or die("Ошибка при подключении к базе данных nen");
		$res=mysql_fetch_assoc($r);
	
		$user_id=$res[user_id];
		echo $user_id;
		$user_id+=1;
		echo $user_id;
	
	//запишем нового пользователя
		$query = "INSERT INTO users	
					(user_id,name,second_name,email,phone_number,password) 
				Values 
					('$user_id','$name','$second_name','$email','$phone_number','$password')";
	
		$r = mysql_query($query) or die("Ошибка при подключении к базе данных hjh");
		if($r==true){
			$result= true;}else{
			$result=false;
		}
return $result;
	}
function newProd($user_id,$name,$categoriya,$image,$key,$description,$description,$price){
	$query = "INSERT INTO products
				(user_id,name,cat,image,metakeywords,metadescription,description,price) 
			Values 
				('$user_id','$name','$categoriya','$image','$key','$description','$description','$price')";
				
		$r = mysql_query($query) or die("Ошибка при подключении к базе данных");
		if($r==true){
			echo 'товар добавлен';}else{
			echo "не добавлен";
		}
}

	
	
?>