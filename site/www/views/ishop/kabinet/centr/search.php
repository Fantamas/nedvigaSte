<?
echo'хуйня на постном масле';
?>
<div id="spisok">
<? foreach($prod as $product):?>
	<div id="object" style="padding-top:10px;">
		<a href="?view=show&id=<?=$product['id']?>">
			<span style="font-size:28px;"><?=$product['name']?></span>
           	<div style="margin-top:20px;">
             <img src=" <?=TEMPLATE.$product['image']?>" width="100%" height="390px">
         	</div>
         </a>
         <div id="price">
         	<span> <?=$product['price']?></span>
            <input type="button" onClick="addToBasket" value="в корзину">
         </div>   
	</div><!--#object ends-->
<? endforeach;?>
</div><!--#spisok ends-->