<div id="mesto" style="float:left; width:49%;">
    <div id="piece">
    <div class="select">
	<a href="javascript:void(0);" class="slct">Выберите область:</a>
	<ul class="drop">
		<li><a href="">Минская</a></li>
		<li><a href="">Гомельска</a></li>
		<li><a href="">Гродненкская</a></li>
		<li>Витебская</li>
	</ul>
	<input type="hidden" id="select"/>
	</div>
     </div>
     <div id="piece">	
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
            </div>
            <div id="piece">
        <label for="city"></label>
            <select id="city" onchange="choiceDistricts()">
            	<option value="0">Город</option>
            </select>
            </div>
            <div id="piece">
        <label for="district"></label>
            <select id="district">
            	<option value="0">Район</option>
            </select>
            </div>
        <label for="street">Улица</label>
        <input id="street" type="text" class="c">
   
   <div id="piece">
    	<label for="metro"></label>
            <select id="metro">
                <option value="0">Метро</option>
                <option value="1">Московская</option>
                <option value="2">уручье</option>
                <option value="3">академия наук</option>
                <option value="4">еще что-то</option>
            </select>
            </div>
            <div id="piece">
    	<label for="distance"></label>
            <select id="distance">
                <option value="0">Расстояние до метро</option>
                <option value="1">Очень близко(до 500)</option>
                <option value="2">Близко(500-1000)</option>
                <option value="3">Нормально так(1000-1500)</option>
                <option value="4">Далеко</option>
            </select>
           </div>
           <div id="piece">
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
            </select></div>
            <br>
          <label>Этажность</label>
            <input id="storied_from" placeholder="from" class="c">
            <input id="storied_to" placeholder="to" class="c"><br>
    	<label>Этаж</label>
        	
            <input id="stories_from" placeholder="from" class="c">
            <input id="stories_to" placeholder="to" class="c">
            <br>
            <label for="price_from">Цена</label>
        <input type="text" id="price_from" placeholder="from" maxlength="10" class="c">
        <input type="text" id="price_to" placeholder="to" class="c">
   <!-- <div class="radio_buttons">
       
    </div>--><!--radio_buttons ends-->
    <br><br>
    </div> <!--- mesto ends-->
    <div id="second" style="float:right;width:50%; border-bottom:solid 10px #FFFFFF; margin-bottom:20px;">
        <ul >
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
                <input type="checkbox" name="optio" id="rad5" />
                <label for="rad5">4+ комн</label>
            </div>
        </div><!--kolvokomnat ends-->
                <label>
                    <input type="checkbox" value="110" name="selectItem">
                    бытовая техника
                </label>
            <br>
                <label>
                    <input type="checkbox" value="20" name="selectItem">
                    мебель
                </label>
            <br>
                <label>
                    <input type="checkbox" value="50" name="selectItem">
                    металл-я дверь
                </label>
           <br>
                <label>
                    <input type="checkbox" value="130" name="selectItem">
                    домофон
                </label>
           <br>
                <label>
                    <input type="checkbox" value="140" name="selectItem">
                    видео-домофон
                </label>
          <br>
                <label>
                    <input type="checkbox" value="55" name="selectItem">
                    лифт
                </label>
            <br>
                <label>
                    <input type="checkbox" value="125" name="selectItem">
                    рядом магазин
                </label>
           <br>
                <label>
                    <input type="checkbox" value="80" name="selectItem">
                    счетчики воды
                </label>
            <br>
                <label>
                    <input type="checkbox" value="2" name="selectItem">
                    парковка
                </label>
           <br>
                <label>
                    <input type="checkbox" value="22" name="selectItem">
                    Wi fi интернет
                </label>
        
    </div><!--#second ends-->
     
<div class="clear"></div>