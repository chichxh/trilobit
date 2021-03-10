<!DOCTYPE html>
<html>
<head>
	<title>Трилобит - Городская среда</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<style type="text/css">
		.footer {
			padding-top: 25px;
			height: 80px;
			background-color: #232323;
			color: #FBFEF9;
		}
	</style>
</head>
<body>
	<?php include('header.php')?>

	<div class="container mt-5">
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<div class="row">
			<h1>ПОДАТЬ ЗАЯВКУ</h1>
			<form action="thanks.php" method="post">
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">Ф.И.О. / Наименование компании</label>
					<input class="form-control" type="text" aria-label="default input example" name="name">
				</div>
				<div class="mb-3">
				  	<label for="exampleFormControlTextarea1" class="form-label">Зачем вам нужно арендовать место</label>
				  	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="decription"></textarea>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">Контактные данные</label>
					<input class="form-control" type="text" aria-label="default input example" name="contact">
				</div>
				<button name="send" type="submit" class="btn btn-light">Подать заявку</button>
			</form>
		</div>
	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>