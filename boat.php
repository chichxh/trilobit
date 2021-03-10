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
			height: 360px;
			background-image: url(img/dots.jpg);
			background-size: cover;
		}
		.header h1 {
			margin-top: 110px;
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
	</style>
</head>
<body>
	<div class="header">
		<?php include('header.php')?>

		<div class="container-fluid">
			<div class="row">
				<h1 class="text-center">Лодки</h1>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-6">
				<a href="skate.php"> <- Скейтбординг</a>
			</div>
			<div class="col-6 text-end">
				<a href="rollers.php">Ролики -></a>
			</div>
		</div>
	</div>
	
</body>
</html>