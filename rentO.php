<?php

require 'connect.php';

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
		.all {
			height: 1800px;
			background-image: url(img/rentP.jpg);
		}
		.all h1 {
			color: #22181C;
			font-weight: bold;
		}
		a {
			color: #22181C;
			text-decoration: none;
			transition-duration: 0.3s;
		}
		a:hover {
			color: #4A3D42;
		}
	</style>
</head>
<body>
	<?php include('header.php')?>
	<div class="container-fluid all">
		<div class="row">
			<div class="col-6 mx-auto mt-5">
				<h1 class="text-center">Ваша заявка принята) <br> Ждите весточку</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-6 mx-auto mt-5">
				<a href="index.php">Вернуться на Главную</a>	
			</div>
		</div>
	</div>	
	<?php 
    if (isset($_POST['send'])) {
        $query = "INSERT INTO rent (name, contact, description) VALUES ('". $_POST['name'] ."', '". $_POST['contact'] ."', 
        '". $_POST['description'] ."')";
        $res = mysqli_query($link, $query);
	    }
	 ?>
</body>
</html>