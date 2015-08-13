<? 
/*foreach($produc as $produc):
print '<pre>';
print_r($produc);
print '</pre>';
endforeach;*

foreach($producc as $prod):
?>
<img src="<?=TEMPLATE.$prod['image_name']?>" width="100" height="100">
<?
print '<pre>';
print_r($prod);
print '</pre>';
endforeach;*/
?>
<!--<form action="zapis.php?product_id=.$row["id"].&name=.$row["name"].'&price='.$row["price"].'" method="POST"><input type="submit" name="vcorzinu" value="В корзину" onClick="alert('Товар добавлен в корзину') " ></form>-->
<div id="spisok">

    <div id="object">
        <a href="?view=show&id=<?=$produc[id]?>">
        <h2><?=$produc['name']?></h2>
        <div id="">
        <img src="<?=TEMPLATE?><?=$produc[image]?>" width="100%" height="390px">
        </a>
        </div>
    </div><!--#object ends-->
    
    <div id="object_info" style="width:550px; height:600px; float:right; background-color:#CCC;">
    <?=TEMPLATE?><?=$produc[short]?><br>
    	<?=$produc[description]?>
    </div><!--#object_info ends-->
</div><!--#spisok ends-->