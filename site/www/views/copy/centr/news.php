<?php 
echo 'это страница новостей !';

$query = "select * FROM news";

	
	$r = mysql_query($query) or die("Ошибка при подключении к базе данных");
	$row = mysql_fetch_array($r);
	
	do{
	printf( '
<div class="object_item"><a href="?view=Show&fl=n&id='.$row["id"].'"><img width="350" height="240" src="'.$row["photo"].'"></a>
	<div class="object_info">
		<div class="object_name">
			<a href="?view=Shown&id='.$row["id"].'">%s</a>
		</div>
		<div class="shdesc">
			%s
		</div>

	</div><a href="?view=Shown&id='.$row["id"].'">Подробнее</a>
</div>' ,$row['name'],$row['sdescription']);}
while ($row = mysql_fetch_array($r));	
?>
