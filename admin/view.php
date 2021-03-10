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

$sql = 'SELECT * FROM rent';
$result = mysqli_query($link, $sql);

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
	</style>
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<?php while ($row = mysqli_fetch_array($result)): ?>
				<div class="col-12">
					<h5>Ф.И.О. / Наименование компании</h6>
					<h6><?= $row['name']; ?></h6>
					<h5>Зачем вам нужно арендовать место</h6>
					<h6><?= $row['description']; ?></h6>
					<h5>Контактные данные</h6>
					<h6><?= $row['contact']; ?></h6>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</body>
</html>