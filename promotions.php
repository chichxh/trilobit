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
	</style>
<body>
	<div class="header">
		<?php include('header.php')?>

		<div class="container-fluid">
			<div class="row mt-5">
				<div class="col-4">
					<h1 class="text-center">ИВЕНТЫ</h1>
				</div>
				<div class="col-4">
					<h1 class="text-center">АКЦИИ</h1>
				</div>
				<div class="col-4">
					<h1 class="text-center">КОНКУРСЫ</h1>
				</div>
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