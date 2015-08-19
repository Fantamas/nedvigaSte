<?php
//session_start();

/*$query = "SELECT * FROM user_uploads ORDER BY user_id_fk DESC LIMIT 1";
$r = mysql_query($query) or die("Ошибка при подключении к базе данных хуй");
 $rrr=mysql_fetch_array($r);
 
$_SESSION['id']=$rrr['user_id_fk'];
$_SESSION['id']=$_SESSION['id']+1;
$idd=$rrr['user_id_fk'];
$idd=$idd+1;
$query = "UPDATE users SET user_id='$idd'";
$r = mysql_query($query) or die("Ошибка при подключении к базе данных хер");*/
?>
<div id="center">
<div class="aboutCont">
<div id="">
<!--
	начало вкладки
-->
<div id="raz">
  <div><span>Аренда</span>
  
  
  <div id='preview'></div>
	
					<form id="imageform" method="post" enctype="multipart/form-data" action='ajaxImageUpload.php' >
						<h1>Загрузите до 5 изображений!</h1> 
                        <input type="hidden" name="id" value="5" >
							<div id='imageloadstatus' style='display:none'><img src="loader.gif" alt="Uploading...."/></div>
							<div id='imageloadbutton'></div>
							<input type="file" name="photos[]" id="photoimg" multiple />
					
					</form>
                    
                    <form id="contakt" method="post"  action="form.php" >
						<input type="hidden" name="id" value="<?=$idd;?>">
                        <div class="str_name" ><span>Я хочу</span></div>
                        <div class="select_wrap">
					
						<select class="ajaxSelect" name="wish">
							<option selected="selected" value="snyat">Снять</option>
							<option value="prodat">Продать</option>
							<option value="kupit">Купить </option>
						</select>
						</div>
             <div class="str_name"><span>Что</span></div>
             <div class="select_wrap">
    			<select class="ajaxSelect" name="type">
						<option selected="selected" value="kvartiru">Квартиру</option>
						<option value="hui">хуй</option>
						<option value="zalupu">залупу </option>
						<option value="yumor">юмор</option>
						<option value="worms">червей</option>
					</select>
                    
				</div>
 		
        <div class="str_name"><span>количество комнат</span></div> 
       
         <div id="block" name="R2">    
					<input type="radio" name="che">1<br>
					<input type="radio" name="che">2<br>
					<input type="radio" name="che">3<br>
					<input type="radio" name="che">4<br>
                    <input type="radio" name="che">+(все)<br>
				</div>
         
        		
                <div class="str_name"><span>Ваше имя</span></div> 
				<input type="text"  maxlength="36" name="fio"  val="" class="nfotdo"> 
         

                <div class="str_name"><span>В городе</span></div>
				<div class="select_wrap">
					<select class="ajaxSelect" name="city">
						<option selected="selected" value="minsk">минск</option>
						<option value="brest">брест</option>
						<option value="mog">могилев </option>
						<option value="gro">Гродно</option>
						<option value="go">гомель</option>
						<option value="vit">витебск</option>
					</select>
				</div>
				<div class="str_name"><span>Цена</span></div>  
				<input type="text" maxlength="5"  class="nfotdo" name="price" placeholder="$">
                <div class="str_name"><span>Ваш email</span></div> 
                <input type="text" size="32" maxlength="36" name="email"  val=""class="nfotdo"> <br />
		
                <div class="str_name"><span>В районе</span></div>
				<div class="select_wrap">
					<select class="ajaxSelect" name="distr">
						<option selected="selected" value="minsk">фрунзенский</option>
						<option value="brest">гомельский</option>
						<option value="mog">центральный</option>
						<option value="gro">хуй знает какой</option>
						<option value="go">гомель</option>
						<option value="vit">витебск</option>
					</select>
				</div>
                <div id="tr">
                <div class="str_name"><span>Ваш номер</span></div> 
				<input type="text" id="inp" size="32" maxlength="36" name="number"  val=""class="nfotdo"> <br />
		</div>
				<div class="clear"></div>
 		<input type="submit"  id='sen' value="Отправить заявку" />
		
</form>
  <div class="clear"></div>
  
  </div>
  <div><span>Продажа</span>2</div>
  <div><span>Коммерческая</span>3 вкладка</div>
  <div><span>Загородняя</span>4 вкладка</div>
</div>
<!--
	конец вкладок
-->

</div>

</div>
</div>