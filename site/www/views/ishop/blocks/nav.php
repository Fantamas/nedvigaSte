<div id="header">
<nav>
<a href="?view=start">Главная </a>
<a href="?view=team">Команда </a>
<a href="?view=search">Поиск</a>
<a href="?view=request">Оставить заявку </a>
<!--<a href="?view=sea">Второй поиск </a>-->
<a href="">Статистика</a>
<a href="">FAQ</a>
<a href="">Идеи</a><br>
<ul style="float:right;">
        	<? if(isset($_SESSION[user_id])){
				echo '<li style="display:inline-block;"><a href="?exit=true">выход</a></li>';}else{
				echo ' <li style="display:inline-block;"><a href="?view=vhod">вход</a></li>
						<li style="display:inline-block;"><a href="?view=reg">регистрация</a></li>';}
			?>
        </ul >
</nav>
</div>