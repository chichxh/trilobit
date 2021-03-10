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
		.header {
			height: 620px;
			background-image: url(img/dots.jpg);
			background-size: cover;
		}
		.header h1 {
			margin-top: 300px;
			font-weight: bold;
		}
		a {
			color: #fff;
			text-decoration: none;
			transition-duration: 0.3s;
		}
		a:hover {
			color: #c4c4c4;
		}
		.own p {
			font-size: 30px;
		}
		.own {
			background-image: url(img/back.jpg);
		}
		h1 {
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="header">
		<?php include('header.php')?>

		<div class="container-fluid">
			<div class="row">
				<h1 class="text-start">РАЗВЛЕКАТЕЛЬНЫЕ<br> ТОЧКИ</h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="col-6 mx-auto mt-5">
			<button class="btn btn-secondary"> <a href="myAcc.php">Начать считать сколько ты потратишь, посещая эти точки</a></button>
		</div>
	</div>

	<div class="container-fluid mt-5 own">
		<div class="text-start">
			<div class="row">
				<div class="col-9 mx-auto">
					<h1>Скейтбординг</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-9 mx-auto">
					<p>Экстремальный вид спорта, заключающийся в катании и в исполнении различных трюков на скейтборде.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-9 mx-auto">
					<a href="skate.php">Подробнее</a>
				</div>
			</div>
		</div>
		<div class="text-end mt-5">
			<div class="row">
				<div class="col-9 mx-auto">
					<h1>Ролики</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-9 mx-auto">
					<p>Вид спорта, в котором спортсмен передвигается на роликовых коньках.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-9 mx-auto">
					<a href="rollers.php">Подробнее</a>
				</div>
			</div>
		</div>
		<div class="text-start mt-5" >
			<div class="row">
				<div class="col-9 mx-auto">
					<h1>Лодки</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-9 mx-auto">
					<p>Вид развлечений, где вы можете прокатиться на лодке по реке Лене</p>
				</div>
			</div>
			<div class="row">
				<div class="col-9 mx-auto">
					<a href="boat.php">Подробнее</a>
				</div>
			</div>
		</div>
		<div class="text-end mt-5 mb-5">
			<div class="row">
				<div class="col-9 mx-auto">
					<h1>Фуд-корт</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-9 mx-auto">
					<p>Зона питания, где посетителям предлагают услуги сразу несколько предприятий питания</p>
				</div>
			</div>
			<div class="row">
				<div class="col-9 mx-auto">
					<a href="foodCort.php">Подробнее</a>
				</div>
			</div>
		</div>
	</div>
		<?php include('footer.php')?>
</body>
</html>