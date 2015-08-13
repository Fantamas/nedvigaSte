<div id="odin" >
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
            <br>
         <label for="">Для кого</label>
            <select id="">
                <option value="0">не выбрано</option>
                <option value="1">семье</option>
                <option value="2">студентам</option>
                <option value="3">девушке</option>
                <option value="4">парню</option>
                <option value="5">двум девушкам</option>
                <option value="6">двум парням</option>
                <option value="7">под офис</option>
            </select>
            <br>
          <label>Этажность</label>
            <input id="storied_from" placeholder="from" class="c">
            <input id="storied_to" placeholder="to" class="c">
    	<label>Этаж</label>
        	<br>
            <input id="stories_from" placeholder="from" class="c">
            <input id="stories_to" placeholder="to" class="c">
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
    <div id="second" style="border-bottom:solid 10px #FFFFFF; margin-bottom:20px;">
        <ul style="max-height: 250px;">
            <li class="multiple" style="width: 200px;">
                <label>
                    <input type="checkbox" value="110" name="selectItem">
                    бытовая техника
                </label>
            </li>
            <li class="multiple" style="width: 200px;">
                <label>
                    <input type="checkbox" value="20" name="selectItem">
                    мебель
                </label>
            </li>
            <li class="multiple" style="width: 200px;">
                <label>
                    <input type="checkbox" value="50" name="selectItem">
                    металл-я дверь
                </label>
            </li>
            <br>
            <li class="multiple" style="width: 200px;">
                <label>
                    <input type="checkbox" value="130" name="selectItem">
                    домофон
                </label>
            </li>
            <li class="multiple" style="width: 200px;">
                <label>
                    <input type="checkbox" value="140" name="selectItem">
                    видео-домофон
                </label>
            </li>
            <li class="multiple" style="width: 200px;">
                <label>
                    <input type="checkbox" value="55" name="selectItem">
                    лифт
                </label>
            </li>
            <li class="multiple" style="width: 200px;">
                <label>
                    <input type="checkbox" value="125" name="selectItem">
                    рядом магазин
                </label>
            </li>
            <br>
            <li class="multiple" style="width: 200px;">
                <label>
                    <input type="checkbox" value="80" name="selectItem">
                    счетчики воды
                </label>
            </li>
            <li class="multiple" style="width: 200px;">
                <label>
                    <input type="checkbox" value="2" name="selectItem">
                    парковка
                </label>
            </li>
            <li class="multiple" style="width: 200px;">
                <label>
                    <input type="checkbox" value="22" name="selectItem">
                    Wi fi интернет
                </label>
            </li>
    	</ul>     
    </div><!--#second ends-->
</div><!--#odin ends-->