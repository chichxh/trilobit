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
		.all {
			height: 1800px;
			background-image: url(img/rentP.jpg);
		}
		.all h1 {
			color: #22181C;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="header">
		<?php include('header.php')?>
	</div>

	<div class="container-fluid all">
		<div class="row">
			<h1 class="text-center mt-5">Подать заявку</h1>
		</div>
        
    	<div class="row">
			<form action="rentO.php" method="post">
				<div class="mb-3 col-6 mx-auto">
					<label for="exampleFormControlTextarea1" class="form-label"></label>
					<input class="form-control" type="text" aria-label="default input example" name="name" placeholder="Ф.И.О. / Наименование компании">
				</div>
				<div class="mb-3 col-6 mx-auto">
					<input class="form-control" type="text" aria-label="default input example" name="contact" placeholder="Контактные данные">
				</div>
				<div class="mb-3 col-6 mx-auto">
				  	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Зачем вам нужно арендовать место"></textarea>
				</div>
				<div class="col-1 mx-auto">
					<button name="send" type="submit" class="btn btn-light">Отправить</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>