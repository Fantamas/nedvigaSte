<?
defined('DOSTUP') or die('Access denied');
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?=TEMPLATE	?>css/style.css" type="text/css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><!--подключения jquery-->
<script src="<?=TEMPLATE?>js/highcharts.js"></script><!--подключение библиотеки графика-->
<script src="<?=TEMPLATE?>js/mychart.js"></script><!--подключение самого графика-->

<!-- скрипт для погрузки изображений архиважно-->
<script>
/* $(document).ready(function() { 
			$('#photoimg').die('click').live('change', function(){ 
			    $("#imageform").ajaxForm({target: '#preview', 
				     beforeSubmit:function(){ 
					
					console.log('ttest');
					$("#imageloadstatus").show();
					 $("#imageloadbutton").hide();
					 }, 
					success:function(){ 
				    console.log('test');
					 $("#imageloadstatus").hide();
					 $("#imageloadbutton").show();
					}, 
					error:function(){ 
					console.log('xtest');
					 $("#imageloadstatus").hide();
					$("#imageloadbutton").show();
					} }).submit();
				});
			}); */
			$(document).ready(function() { 
			$('#photoimg').die('click').live('change', function(){ 
			    $("#imageform").ajaxForm({target: '#preview', 
				     beforeSubmit:function(){ 
					
					console.log('ttest');
					$("#imageloadstatus").show();
					 $("#imageloadbutton").hide();
					 }, 
					success:function(){ 
				    console.log('test');
					 $("#imageloadstatus").hide();
					 $("#imageloadbutton").show();
					}, 
					error:function(){ 
					console.log('xtest');
					 $("#imageloadstatus").hide();
					$("#imageloadbutton").show();
					} }).submit();
				});
			});
</script>
<!-- скрипт для погрузки изображений архиважно-->
<script src="<?=TEMPLATE?>script.js"></script>
<script src="<?=TEMPLATE?>scrip.js"></script>



</head>

<body>
<?
    require_once 'blocks/nav.php';
	//	include_once 'parser/parser.php';
	
	include 'centr/'.$view.'.php';
	/*
	if($view!=='start'){
		require_once 'blocks/bar.php';
	}
	*/
?>

<div class="clear"></div>
<? require_once 'blocks/footer.php';?>
</body>
</html>
