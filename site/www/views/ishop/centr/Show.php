<div id="center">
<? 
foreach($produc as $produ):
print '<pre>';
print_r($produ);
print '</pre>';
endforeach;
?>
<? 
foreach($producc as $prod):
?>
<img src="<?=TEMPLATE.$prod['image_name	']?>" width="100" height="100">
<?
print '<pre>';
print_r($prod);
print '</pre>';
endforeach;
?>
</div>





<!--<form action="zapis.php?product_id=.$row["id"].&name=.$row["name"].'&price='.$row["price"].'" method="POST"><input type="submit" name="vcorzinu" value="В корзину" onClick="alert('Товар добавлен в корзину') " ></form>-->














