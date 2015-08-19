<div id="header">
    <nav>
        <a href="?view=start">Главная </a>
        <a href="?view=search">Поиск</a>
        <a href="?view=request">Оставить заявку </a>
        <a href="?view=stat">Статистика</a>
        <a href="?view=anal">Аналитика</a>
       	<span style="float:right">
        <? if(isset($_SESSION[user_id])){
				echo '<a href="?exit=true">выход</a>';}else{
				echo '<a href="?view=vhod">вход</a>
				<a href="?view=reg">регистрация</a>';}?>
        </span>
    </nav>
</div><!--#HEADER ENDS-->