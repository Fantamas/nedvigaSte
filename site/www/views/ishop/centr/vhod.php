<div id="center">
<div id="vhod">
<form method="post" action="index.php" class="customForm">
	<h2>Login:</h2>
    <!--<label>введите email</label>--><input type="text" name="vname">
    <h2>Password:</h2>
    
   <!--<br> <label>введите пароль</label>--><input type="password" name="vpass">
   <!-- <input type="submit"> -->
   
   <button type="submit">Войти</button>
</form>
<a href="#">Забыли пароль?</a>
</div>
</div>

<?php
//reg
/*session_start();

$query = "SELECT * FROM user_uploads ORDER BY user_id_fk DESC LIMIT 1";
$r = mysql_query($query) or die("Ошибка при подключении к базе данных хуй");
 $rrr=mysql_fetch_array($r);
 
$_SESSION['id']=$rrr['user_id_fk'];
$_SESSION['id']=$_SESSION['id']+1;

$idd=$rrr['user_id_fk'];
$idd=$idd+1;
$query = "UPDATE users SET user_id='$idd'";
$r = mysql_query($query) or die("Ошибка при подключении к базе данных хер");*/
?>
<!--
<form action="#" method="post" class="customForm">
	
		<h2>Input:</h2>
		<div class="input">
			<input type="text" id="text" name="text" />
		</div>
		
		<h2>Текстовое поле:</h2>
		<div>
			<textarea id="textarea"></textarea>
		</div>

		<h2>Select:</h2>			
		<div class="select">
			<a href="#" class="slct">Выберите Ваше лучшее качество:</a>
			<ul class="drop">
				<li>Красивый(ая)</li>
				<li>Умный(ая)</li>
				<li>Коммуникабульный(ая)</li>
				<li>Скромный(ая)</li>
			</ul>
			<input type="hidden" id="select" />
		</div>		
		
		<h2>Radio Button:</h2>
		Выберите Ваше лучшее качество:
		<div class="radioblock">
			<div class="radio">Красивый(ая)</div>
			<div class="radio">Умный(ая)</div>
			<div class="radio">Коммуникабульный(ая)</div>
			<div class="radio">Скромный(ая)</div>
			<div class="clear"></div>
			
			<input type="hidden" id="radion" />
		</div>

		<h2>Checkbox:</h2>
		Выберите, с какими языками программирования Вам доводилось сталкиваться в веб-дизайне:
		<div class="checkboxes">
			<div class="check">
				jQuery
				<input type="checkbox" value="jQuery" />
			</div>
			<div class="check">
				HTML
				<input type="checkbox" value="HTML" />
			</div>
			<div class="check">
				CSS
				<input type="checkbox" value="CSS" />
			</div>
			<div class="check">
				PHP
				<input type="checkbox" value="PHP" />
			</div>
			<div class="check">
				MySql
				<input type="checkbox" value="MySql" />
			</div>
		</div>
		
		<div class="fileload">
			<h2>Загрузка файла:</h2>
			<div class="file-load-block">
				<input type="file" value="" id="file" />
				<div class="fileLoad">
					<input type="text" value="Select file" />
					<button>Select file</button>
				</div>
			</div>
		</div>
		
		<div class="reset-form">
			<h2>Сбрасываем поля формы</h2>
			<button>Сброс</button>
		</div>
		
		<div class="sendmail">
			<h2>Отправляем форму:</h2>
			<button type="submit">Отправить</button>
            
		</div>
			<button type="submit">Отправить</button>
	</form>-->