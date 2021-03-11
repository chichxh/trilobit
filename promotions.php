<!DOCTYPE html>
<html>
<head>
	<title>Трилобит - Городская среда</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
		body {
			height: 3800px;
			background-color: #2A363B;
			color: #FFF;
			font-family: 'Montserrat', Arial;
		}
		.header {
			height: 620px;
			background-color: #E84A5F;
		}
		.header h1 {
			margin-top: 300px;
			color: #FFF;
			font-weight: bold;
		}
		.footer {
			padding-top: 15px;
			height: 80px;
			background-color: #232323;
			color: #FBFEF9;
		}
		.red {
			color: #E84A5F;
		}
		h1 {
			font-weight: bold;
		}
	</style>
<body>
	<div class="header">
		<?php include('header.php')?>

		<div class="container-fluid">
			<div class="row mt-5">
				<div class="col-4">
					<h1 class="text-center">АКЦИИ</h1>
				</div>
				<div class="col-4">
					<h1 class="text-center">ИВЕНТЫ</h1>
				</div>
				<div class="col-4">
					<h1 class="text-center">КОНКУРСЫ</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="container mt-5">
		<div class="flex-row-reverse">
			<h1>Хочешь устроить своё мероприятие?</h1>
			<div class="col-12 d-flex mt-4">
				<h1 class="me-5 red">I.</h1>
				<h1>Перейди во вкладку аренда</h1>
			</div>
			<div class="col-11 d-flex">
				<h1 class="me-5 red">II.</h1>
				<h1>Выбери нужное для тебя место</h1>
			</div>
			<div class="col-10 d-flex">
				<h1 class="me-5 red">III.</h1>
				<h1>Заполни заявку</h1>
			</div>
			<div class="col-9 d-flex">
				<h1 class="me-5 red">IV.</h1>
				<h1>Жди обратной связи</h1>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<h1>Подарок триллобита</h1>
			<p>Как получить подарок? 
			Подойдите к трилобиту и найдите 
			QR-код, который подарит 
			вам интересный подарок
			</p>
		</div>
	</div>

	<div class="footer fixed-bottom">
		<?php include('footer.php')?>
	</div>
</body>
</head>
</html>