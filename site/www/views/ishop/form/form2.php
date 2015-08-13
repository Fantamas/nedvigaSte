<div id="dva">
    <div id="mesto" style="background-color:#CCC">
        <label for="area"></label>
            <select id="area" onchange="choiceCities()">
                <option value="0">Область</option>
                <option value="1">Минская</option>
                <option value="2">Гомельская</option>
                <option value="3">Гродненская</option>
                <option value="4">Витебская</option>
                <option value="5">Могилевская</option>
                <option value="6">Брестская</option>
            </select>
        <label for="city"></label>
            <select id="city" onchange="choiceDistricts()">
            	<option value="0">Город</option>
            </select>
        <label for="district"></label>
            <select id="district">
            	<option value="0">Район</option>
            </select>
        <label for="street">Улица</label>
        <input id="street" type="text" class="c">
    </div>
    <div class="radio_buttons">
        <div id='kolvokomnat' >
            <div>
                <input type="checkbox" name="optio" id="rad1" checked />
                <label for="rad1">1 комн </label>
            </div>
            <div>
                <input type="checkbox" name="optio" id="rad2" />
                <label for="rad2">2 комн</label>
            </div>
            <div>
                <input type="checkbox" name="optio" id="rad3" />
                <label for="rad3">3 комн</label>
            </div>
            <div>
                <input type="checkbox" name="optio" id="rad4" />
                <label for="rad4">4 комн</label>
            </div>
            <div>
                <input type="checkbox" name="optio" id="rad5" />
                <label for="rad5">4+ комн</label>
            </div>
        </div><!--kolvokomnat ends-->
    </div><!--radio_buttons ends-->
	<br><br>
    <label for="price_from">Цена</label>
        <input type="text" id="price_from" placeholder="from" maxlength="10" class="c">
        <input type="text" id="price_to" placeholder="to" class="c">
	<br><br>
    <label>Площадь общая </label>
        <input id="square_from" placeholder="from" class="c">
        <input id="square_to" placeholder="to" class="c">
    <input type="button" id="button" value="фильтры">
    <div id="first" style="border-bottom:solid 10px #FFFFFF; margin-bottom:20px;">
        <label>Площадь жилая</label>
            <input id="living_from" placeholder="from" class="c">
            <input id="living_to" placeholder="to" class="c">
        <label>Год постройки</label>
            <input id="year_from" placeholder="from" class="c">
            <input id="year_to" placeholder="to" class="c">
            <br>
		<label>Площадь кухни </label>
            <input id="kitchen_from" placeholder="from" class="c">
            <input id="kitchen_to" placeholder="to" class="c">
        <label>Этажность</label>
            <input id="storied_from" placeholder="from" class="c">
            <input id="storied_to" placeholder="to" class="c">
    	<label>Этаж</label>
            <input id="stories_from" placeholder="from" class="c">
            <input id="stories_to" placeholder="to" class="c">
            <br>
    	<label for="wc">Туалет</label>
            <select id="wc">
                <option value="0">Не выбрано</option>
                <option value="1">Совмещенный</option>
                <option value="2">Раздельный</option>
                <option value="3">Несколько</option>
            </select>
            <br>
        <label for="balcony">Балкон</label>
            <select id="balcony">
                <option value="0">Не выбрано</option>
                <option value="1">нет</option>
                <option value="2">Балкон</option>
                <option value="3">Лоджия</option>
                <option value="4">Балкон застекленный</option>
                <option value="5">Лоджия застекленная</option>
                <option value="6">2 балкона</option>
                <option value="7">2 лоджии</option>
            </select>
    		<br>
        <label for="project">Проект</label>
            <select id="project">
                <option value="0">Не выбрано</option>
                <option value="1">Улучшенный проект</option>
                <option value="2">Сталинка</option>
                <option value="3">Чешский проект</option>
                <option value="4">Стандартный проект</option>
                <option value="5">Брежневка</option>
                <option value="6">Хрущевка</option>
                <option value="7">Малосемейка</option>
            </select>
            <br>
    	<label for="material">Материал стен</label>
            <select id="material">
                <option value="0">Не выбрано</option>
                <option value="1">Панельный</option>
                <option value="2">Монолитный</option>
                <option value="3">Кирпичный</option>
                <option value="4">Блочный</option>
                <option value="5">Каркасный</option>
            </select>
        <label for="metro"></label>
            <select id="metro">
                <option value="0">Метро</option>
                <option value="1">Московская</option>
                <option value="2">уручье</option>
                <option value="3">академия наук</option>
                <option value="4">еще что-то</option>
            </select>
    	<label for="distance"></label>
            <select id="distance">
                <option value="0">Расстояние до метро</option>
                <option value="1">Очень близко(до 500)</option>
                <option value="2">Близко(500-1000)</option>
                <option value="3">Нормально так(1000-1500)</option>
                <option value="4">Далеко</option>
            </select>
        <label for="agency">от агентства</label>
            <select id="agency">
                <option value="0">не выбрано</option>
                <option value="1">не найдено</option>
            </select>
    	<label class="custom" for="phone">Телефон</label>
    		<input id="phone" type="checkbox">
    		<br>
    	<label class="custom" for="internet">интернет</label>
    		<input id="internet" type="checkbox">
    </div><!--end first-->  
</div>