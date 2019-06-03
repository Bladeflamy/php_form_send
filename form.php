<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Форма заказаа</title>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="ajax.js"></script>
	</head>

	<body>

		<header>
		</header>

		<section>
			<div>
				<!-- Создаем простую форму состоящую из 2х полей и 1 кнопки -->
				<form action="" method="post" id="form_1"> <!-- объявляем форму, метод передачи, и id формы -->
					<input type="text" name="number" maxlength="13" value ="" placeholder="Введите телефон"><br> <!-- Поле ввода телефоного номера -->
					<input type="text" name="quantity" value="" placeholder="Введите количество"><br> <!-- Поле ввода для количества -->
					<input type="submit" id="send" value="Заказать"> <!-- Кнопка зазказа-->
				</form>
				<div id="result_send"></div> <!-- Блок для возращаймых данных-->
			</div>
		</section>
		
	</body>
</html>