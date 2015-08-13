id = "unnamed";
links =  ['a', 'p', 'k', 'o'];

function hide(){
	if(this.id != id)
		$(this).hide();
}

$(document).ready(function () {
		var href = location.href, idForShow = "";
	for(var link in links)
		if(href.indexOf(links[link] + "=") != -1){
			var index = Number(link) + 1;
			idForShow ="#p" + index;
			break;
		}
	var query = '.pod';
	if(idForShow.length != 0)
		query += ':not(' + idForShow + ')';
	$(query).hide();
	$('.col').click(function(){
		var name = this.id;
		window.id = "p" + name.substr(1, name.length - 1);
		$(".pod").each(hide);
		$('#' + id).toggle();
	});
	
	$.ajax({
				type: "POST",	// Тип запроса
				url: "quert.php",	// Путь к сценарию, обработающему запрос
				dataType: "json",	// Тип данных, в которых сервер должен прислать ответ
				data: "query="+ query,	// Строка POST-запроса
				error: function () {	// Обработчик, который будет запущен в случае неудачного запроса
					alert( "При выполнении запроса произошла ошибка :(" );	// Сообщение о неудачном запросе
				},
				success: function ( data ) {
					 
					for ( var i = 0; i < data.length; i++ ) {
						// Каждое полученное значение вставим в список видов транспорта
						$( '#kind' ).append( '<option value="' + data[i].kind_id + '">' + data[i].kind + '</option>' );
					}
					// После того, как мы сформировали список, мы можем сделать его активным
					// обратившись к его свойству disabled
					$( '#kind' ).prop( 'disabled', false );	// Включаем поле
				}
			});
	
});
/*$(document).ready(function () {
    setCookie("name", "value");
    alert(getCookie("name"));
    deleteCookie("name");
    alert(getCookie("name"));
});*/


function setCookie(name, value) {
    var date = new Date(Date.now() + 60 * 1000);
    var cookie = name + "=" + value;
    cookie += "; path=/; expires=" + date.toUTCString();
    document.cookie = cookie;
}

function getCookie(name) {
    var cookies = document.cookie, start = cookies.indexOf(name);
    if (start == -1) return undefined;
    var end = cookies.indexOf(";", start);
    if (end == -1) end = cookies.length;
    return cookies.substr(start + name.length + 1, end);
}

function deleteCookie(name) {
    var date = Date.now();
    date.setTime(date.getTime() - 1);
    document.cookie = name + "=; expires=" + date.toGMTString();
}
