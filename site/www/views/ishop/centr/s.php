<?php
//провести проверки
if(isset($_POST['ot'])){$ot=$_POST['ot'];}else{$ot='ничего';}
if(isset($_POST['do'])){$do=$_POST['do'];}else{$do='ничего';}
if($_POST['ot']==''){$ot=0;}
if($_POST['do']==''){$do=999999999999;}

if(!preg_match("|^[\d]*$|", $ot))  {exit("Не верен формат числа.");}; 
if(!preg_match("|^[\d]*$|", $do))  {exit("Не верен формат числа.");}; 

echo $ot;
echo $do;
//нужно както хранить максимальное значение



//////проверка формы
if (isset ($_POST ['wish'])){$wish=$_POST['wish'] ; $t="wish='$wish'";}
if (isset ($_POST ['type'])){$type=$_POST['type'] ; $t=$t." AND type='$type'";}
if ($_POST ['cd']=='on'){
if (isset ($_POST ['distr'])){$distr=$_POST['distr'];}
	$t=$t."AND distr ='$distr'";}
						
//магия!не трогать					
$isFirst = 'false';
$addToQuery;
for ($x = 1; $x <= 4; $x++){
	if($_POST['c'.$x] == 'on'){
		$pos = $x;
        if($isFirst == 'false'){
        	$addToQuery = ' AND R2=\''.$pos.'\'';
			$isFirst = 'true';
		}
		else{$addToQuery .= ' OR R2=\''.$pos.'\'';}
	}
}
if($addToQuery != '')
	$t= $t.$addToQuery;
echo $addToQuery.'<br>';
///конец магии
 	
if(isset($t)){
	$query = "select * FROM products WHERE $t AND price BETWEEN $ot and $do LIMIT $start, $num";
	}
else{$query = "select * FROM products ";}

echo $query.'<br>';

	$r = mysql_query($query) or die("Ошибка при подключении к базе данных ололыыы");
	$row = mysql_fetch_array($r);
	$isRecord = 'false';
	if($row)
		$isRecord = 'true';
	while ($isRecord == 'true'){
	printf( '
<div class="object_item"><a href="?view=Show&fl=p&id='.$row["id"].'"><img width="350" height="240" src="'.$row["image"].'"></a>
	<div class="object_info">
		<div class="object_name">
			<a href="?view=Show&id='.$row["id"].'">%s</a>
		</div>
		<div class="object_street">
			<span> %s</span>
		</div>
		<div class="object_metro">
			<span>%s</span>
		</div>
		<div class="object_params">
			<ul>
				<li>
					<span class="param_name">Площадь общая/жилая/кухня</span>
					<span class="param_value">%s/%s/%s</span>
				</li>
				<li>
					<span class="param_name">Количество комнат/раздельных комнат</span>
					<span class="param_value">%s/%s</span>
				</li>
				<li>
					<span class="param_name">Этаж/Этажность</span>
					<span class="param_value">%s/%s</span>
				</li>
				<li>
					<span class="param_name">Год постройки</span>
					<span class="param_value">%s</span>
				</li>
			</ul>
		</div>
		<div class="object_price">
			<span>Цена:</span>
			<strong>%s</strong>
		</div>

	</div><a href="?view=Show&id='.$row["id"].'">Подробнее</a>
</div>' ,$row['name'],$row['address'],$row['metro'],$row['S'],$row['S2'],$row['S3'],$row['R'],$row['R2'],$row['F'],$row['F2'],$row['Year'],$row['price']);
$row = mysql_fetch_array($r);
	if($row)
		$isRecord = 'true';
	else
		$isRecord = 'false';
		
}
?>

