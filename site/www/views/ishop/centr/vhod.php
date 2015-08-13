<form method="post" action="index.php">
    <label>введите email</label><input type="text" name="vname"><br>
    <label>введите пароль</label><input type="password" name="vpass">
    <input type="submit">
</form>
<a href="#">Забыли пароль?</a>



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