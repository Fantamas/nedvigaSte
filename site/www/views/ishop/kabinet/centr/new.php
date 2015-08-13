<div id="spisok">
<form action="index.php" method="post" name="newPr">
	<input type="hidden" name="user_id" value="<?=$_SESSION[user_id];?>">
    <label for="name">имя</label><input type="text"  name="name"><br>
    <label for="categoriya">категория</label>
    <select name="categoriya">
    	<option value="0">не выбрано</option>
        <option value="noski">носки</option>
        <option value="soski">соски</option>
        <option value="tiski">пески</option>
    </select><br>
   	<label for="key">ключевые слова</label><input type="text"  name="key"><br>
    <label for="price">цена</label><input type="text"  name="price"><br>
    <label for="image">картинка</label><input type="text"  name="image"><br>
    <label for="">описание</label><br>
    <textarea name="description">
    
    </textarea>
    <input type="submit" value="отправить">
</form>
</div><!--#spisok ends-->











