<?php

$database = 'trilobit';
$user = 'root';
$password = 'root';
$host = 'localhost';

$mysqli = new mysqli($host, $user, $password, $database);

$link = mysqli_connect($host, $user, $password, $database);

if ($link == false){
	print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}

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
			background-color: #2A363B;
			color: #fff;
		}
		.round {
			background-color: #1A2326;
			border-radius: 30px;
			padding: 20px 0;
			text-align: center;
			height: 480px;
		}
		a {
			color: #fff;
			text-decoration: none;
			transition-duration: 0.3s;
		}
		a:hover {
			color: #c4c4c4;
		}
	</style>
</head>	
<body>
	<?php include('header.php')?>

	<div class="contaibner-fluid">
		<div class="row mt-5 mb-5">
			<div class="col-5">
				<a href="control.php">Обратно на Галвную</a>
			</div>
			<div class="col-7">
				<h1 class=" fw-bold">Изменить ивенты</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-5 round mx-auto">
				<h1>Удалить существующий</h1>
			</div>
			<div class="col-5 round mx-auto">
				<h1>Добавить новый</h1>
			</div>
		</div>
	</div>
</body>
</html>
