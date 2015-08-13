<script src="<?=TEMPLATE?>script.js"></script>

<div class="jobs-primary-heading jobs-heading-internal">
<h1 class="jobs__header" >Поиск</h1>
</div>
<? require_once TEMPLATE.'blocks/form.php';?>

<br><br>

<div id="search_results"><!--SEARCH RESULTS STARTS-->

<? foreach($products as $product):?>
<div id="item">

<img src="<?=TEMPLATE.$product['image']?>" width="340px" height="190px;">
<div id="telo">
<a href="?view=show&idt=<?=$product['id']?>"><?=$product['name']?></a><br>
<span><?=$product['address']?></span>(<span>район:</span><span><?=$product['distr']?></span>)<br>
<span>метро:</span><span><?=$product['metro']?></span>
<ul>
<li><span>город:</span><span><?=$product['city']?></span></li>
<li><span>площади о/ж/к:</span><span><?=$product['S']?>/<?=$product['S2']?>/<?=$product['S3']?></span></li>
<li><span>количество комнат:</span><span><?=$product['R']?>/<?=$product['R2']?></span></li>
<li><span>описание(краткое?):</span><span><?=$product['description']?></span></li>
<li><span>цена:</span><span><?=$product['price']?></span></li>
<li><span>рейтинг?</span></li>
</ul>
<a href="?view=show&idt=<?=$product['id']?>" class="btn-more" style="float:right">Подробнее</a>
</div><!-- edn #telo-->
<div class="clear"></div>
</div>
       
<? endforeach;?>  

</div><!--SEARCH RESULTS ENDS-->








    
    
        

    
	
        



    <?

//echo count (parse());
?>
    


