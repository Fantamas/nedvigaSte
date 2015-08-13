<?
echo "вы вошли в кабинет";

//error_reporting(0);
defined('DOSTUP') or die('Access denied');

/*if(!isset($_session['pos_id_fk'])){
	if(isset($_SESSION['user_id_fk'])){$_session['pos_id_fk']=$_SESSION['user_id_fk'];}
	else
	{$_session['pos_id_fk']=1;}}*/
?>
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
<script src="<?=TEMPLATE?>scrip.js"></script>
</head>
<body>
<?
//include_once 'parser/parser.php';
require_once TEMPLATE.'blocks/nav.php';
require_once TEMPLATE.'blocks/bar.php';
?>



<div id="center">
<? require_once TEMPLATE.'blocks/bar.php';
  include 'centr/'.$kview.'.php';?>
</div><div class="clear"></div>
<? require_once 'blocks/footer.php';?>
</body>
</html>

