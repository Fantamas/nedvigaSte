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
</head>

<body>
<?
include_once 'parser/parser.php';
require_once 'blocks/nav.php';
?>



<div id="center">
<? include 'centr/'.$view.'.php';?>
</div>
<? require_once 'blocks/footer.php';?>
</body>
</html>
