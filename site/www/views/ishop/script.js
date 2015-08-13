

const CITIES = [["Минск", "Сеница", "Паперня", "Боровляны", "Лошаны", "Заречье", "Колодищи",
    "Новый Двор", "Ждановичи", "Прилуки", "Лесной", "Дзержинск",
    "Озерицкая Слобода", "Копище", "Заславль", "Гатово", "Урожайная",
    "Фаниполь", "Солнечный", "Радошковичи", "Мачулищи"],
    ['two'],
    ['three'],
    ['four'],
    ['five'],
    ['six']];
 
const LOCATION = ["area", "city", "district", "community", "street"];
 
var query = {radio: "radio1"};
 
function change(value) {
    var text = "";
    for (var field in query) text += field + "=" + query[field] + "&";
   if (text.length)
        alert("in id=" + value + " query:" + text.substr(0, text.length - 1));
}
 
function choice(id) {
    var index = LOCATION.indexOf(id);
    if(index == -1) return;
    var size = LOCATION.length - 1;
    for (var i = index + 1; i < size; ++i) {
        $("#" + LOCATION[i] + " option[value='0']").prop('selected', true);
        delete(query[LOCATION[i]]);
    }
    $("#" + LOCATION[i]).val("");
    delete(query[LOCATION[i]]);
}
 
function cleanFields() {
    $("select option[value='0'] :not(.location)").prop('selected', true);
    $(":checkbox[type='checkbox']").attr('checked', false);
    $(":input[type='text']:not(.location)").each(function () {
        var index = LOCATION.indexOf(this.id);
        if (index == -1) $(this).val("");
    });
}
function validation(element) {
    var id = element.id;
    element = $(element);
    var value = element.val();
    var valid = false;
    if (value.length == 0 || id == "street")
        valid = true;
    else {
        var isNumeric = jQuery.isNumeric(value);
        if (element.attr("class") == "squares")
            valid = isNumeric;
        else
            valid = isNumeric && value.indexOf(".") == value.indexOf(",");
    }
    if(valid)
        element.css("color", "green");
    else
        element.css("color", "red");
 
}
 
$(document).ready(function () {
    $("select").change(function () {
        var value = $(this).find("option:selected").val();
        if (value == 0)
            delete(query[this.id]);
        else {
            query[this.id] = value;
            choice(this.id);
        }
        change(this.id);
    });
    $(":radio").change(function () {
        var value = this.id;
        cleanFields();
        for (var property in query)
            if(LOCATION.indexOf(property) == -1)
                delete(query[property]);
        query.radio = value;
        change(this.id);
    });
    $(":input").keyup(function () {
        var value = $(this).val();
        if (value.length)
            query[this.id] = value;
        else
            delete(query[this.id]);
        validation(this);
        change(this.id);
    });
    $(":checkbox").change(function () {
        var checkbox = $(this);
        if (checkbox.is(":checked"))
            query[this.id] = checkbox.val();
        else
            delete(query[this.id]);
        change(this.id);
    })
	
	//а вот тут давай что-нибудь отправим
	$(query).change(function(){
		$.ajax({
				type: "POST",	// Тип запроса
				url: "quert.php",	// Путь к сценарию, обработающему запрос
				dataType: "json",	// Тип данных, в которых сервер должен прислать ответ
				data: "query="+ query,	// Строка POST-запроса
				error: function () {	// Обработчик, который будет запущен в случае неудачного запроса
					alert( "При выполнении запроса произошла ошибка :(" );	// Сообщение о неудачном запросе
				},
				success: function ( data ) {
					 $( '#telo' ).append( '<p>' + data[query] + '</p>' );
					
					// После того, как мы сформировали список, мы можем сделать его активным
					// обратившись к его свойству disabled
					
				}
			});	
	
	
	
	});
	
});//закрытие главной функции
 
function choiceCities() {
    var cities = CITIES[$("#area").find("option:selected").val() - 1];
    var code = "", value = 0;
    for (var city in cities)
        if (cities.hasOwnProperty(city))
            code += "<option value=\"" + (++value) + "\">" + cities[city] + "</option>";
    city = document.getElementById("city");
    city.innerHTML = "<option value=\"0\">Город</option>" + code;
}
 
function choiceDistricts() {
    var DISTRICTS = [];
    DISTRICTS[0] = ["Центральный", "Октябрьский", "Фрунзенский",
        "Первомайский", "Ленинский", "Советский",
        "Заводской", "Партизанский", "Московский"];
    DISTRICTS[17] = ["Пригород"];
    var pos = $("#city").find("option:selected").val() - 1;
    var districts = DISTRICTS[pos];
    var code = "", value = 0;
    for (var district in districts)
        if (districts.hasOwnProperty(district))
            code += "<option value=\"" + (++value) + "\">" + districts[district] + "</option>";
    district = document.getElementById("district");
    district.innerHTML = "<option value=\"0\">Район</option>" + code;
}

