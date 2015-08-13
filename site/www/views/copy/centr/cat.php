<?php
//получение цикла товаров
$qw="select * from products INNER JOIN categories ON products.catidA=categories.catid WHERE catid='$n' ";
$r3 = mysql_query($qw) or die("Ошибка при подключении к базе данных ");
$row = mysql_fetch_assoc($r3);
	do{
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
</div>' ,$row['name'],$row['address'],$row['metro'],$row['S'],$row['S2'],$row['S3'],$row['R'],$row['R2'],$row['F'],$row['F2'],$row['Year'],$row['price']);}
while ($row = mysql_fetch_array($r3));	
?>
<div><div style="background-color:#FF0 ;float:right; width:280px; height:40px;font-size:18px;"><a href="">Добавить своё предложение</a></div></div>

