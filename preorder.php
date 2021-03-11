<?php
require 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Трилобит - Городская среда</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
		body {
			font-family: 'Montserrat', Arial;
			color: #fff;
			background-color: #2A363B;
		}
	</style>
</head>
<body>
	<?php include('header.php')?>

	<div class="container-fluid mt-5">
		<form action="preorderP.php" method="post">
			<div class="mb-3 col-6 mx-auto">
				<input class="form-control" type="text" aria-label="default input example" name="name" placeholder="Ф.И.О">
			</div>
			<div class="mb-3 col-6 mx-auto">
				<input class="form-control" type="text" aria-label="default input example" name="contact" placeholder="Контактные данные">
			</div>
			<div class="mb-3 col-6 mx-auto">
				<select class="form-select" aria-label="select" name="time">
				    <option selected>Время</option>
				    <option value="1">9:00 - 12:00</option>
				    <option value="2">12:00 - 15:00</option>
				    <option value="3">15:00 - 18:00</option>
				    <option value="4">18:00 - 21:00</option>
				</select>
			</div>
			<div class="mb-3 col-6 mx-auto">
				<select class="form-select" aria-label="select" name="prop">
				    <option selected>Выберите услугу</option>
				    <option value="1">Скейтбординг</option>
				    <option value="2">Лодки</option>
				    <option value="3">Ролики</option>
				    <option value="4">Фуд-корт</option>
				</select>
			</div>
			<div class="col-1 mx-auto">
				<button name="send" type="submit" class="btn btn-light">Отправить</button>
			</div>
		</form>
	</div>
</body>
</html>