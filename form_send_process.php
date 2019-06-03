<?php
// Задаем услвоие при котором проверяем есть что в поле number (Проверяю его т.к. имея телефон клиенту можно перезвонить даже не зная нужного количества)
if (htmlspecialchars($_POST["number"])) {

	// Получаем переменные  из поля с именем NUMBER / QUANTITY и предохраняемся с помощью htmlspecialchars
	$number = htmlspecialchars($_POST["number"]);
	$quantity = htmlspecialchars($_POST["quantity"]);
	$myemail = "vitaly@avtobrok.by"; // Кому @
	$tema ='Тема письма'; // Тема письма
	$from = "From: brokbrest.by <webmaster@brokbrest.by>"; // От кого @

	// Текст сообщения для отправки
	$message_to_myemail = "Тут мы пишем текст сообщения:
	И включаем наши переменные такие как: $number,
	и еще количество: $quantity
	Конец";

	// Функция отправки сообщения
	mail($myemail, $tema, $message_to_myemail, $from);
	$result="<script> alert('Ваша заявка успешно отправлена, наш менеджер свяжется с Вами в ближайшее время.')</script>";
	
}
else {
	$result="<script> alert('Ваша заявка не отправлена, првоерте корректность поелй')</script>";
}
	//Передаем переменную в AJAX
	echo json_encode($result);
?>