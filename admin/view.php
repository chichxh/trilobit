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
		.round {
			background-color: #1A2326;
			border-radius: 30px;
			padding: 20px 0;
			text-align: center;
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
	<div class="container mt-5">
		<div class="row">
			<div class="col-5">
				<a href="control.php">Обратно на Галвную</a>
			</div>
			<div class="col-7">
				<h1 class=" fw-bold">Заявки</h1>
			</div>
		</div>
		<div class="row">
			<?php while ($row = mysqli_fetch_array($result)): ?>
				<div class="row">
					<div class="col-8 mb-3 mt-5 round mx-auto">
						<h5>Ф.И.О. / Наименование компании</h6>
						<h6><?= $row['name']; ?></h6>
					</div>
					<div class="col-8 mb-3 round mx-auto">
						<h5>Причины арендовать место</h6>
						<h6><?= $row['description']; ?></h6>
					</div>
					<div class="col-8 mb-5 round mx-auto">
						<h5>Контактные данные</h6>
						<h6><?= $row['contact']; ?></h6>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</body>
</html>