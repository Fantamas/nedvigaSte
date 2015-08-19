<script src="<?=TEMPLATE?>funcs.js"></script>
<script src="<?=TEMPLATE?>script.js"></script>
<div id="center">
<div class="jobs-primary-heading jobs-heading-internal">
<h1 class="jobs__header" >Поиск</h1>
</div>
<? require_once TEMPLATE.'blocks/form.php';?>

<br><br>

<div id="search_results"><!--SEARCH RESULTS STARTS-->

<? foreach($products as $product):?>
<div id="item">

<img src="<?=TEMPLATE.$product['image']?>" width="340px" height="190px;">
<a href=""><?=$product['name']?></a>
айди:<?=$product['id']?>
катА<?=$product['catidA']?><a href="" class="btn-more">Подробнее</a>
</div>
       
<? endforeach;?>  

</div><!--SEARCH RESULTS ENDS--></div>