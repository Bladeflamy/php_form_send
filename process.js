$( document ).ready(function() {
	$("#send").click(
		function(){
			send('result_send', 'form_1', 'form_send_process.php');
			return false;
		}
	);
});

function send(result_send, form_1, url) {
	$.ajax({
		url: url, //url страницы form_send_process.php
		type: "POST", //Укажем метод передачи
		dataType: "html", //Укажем формат данны
		data: $("#"+form_1).serialize(), //Сеарилизуем объект
		success: function(response) { //При успешной отправке
			result = $.parseJSON(response);
			$('#result_send').html(result);
		},
		error: function(response) { //Данные не отправлены
			result = $.parseJSON(response);
			$('#result_send').html('Даныне не переданы');
		}
	});
}
