<?php
require 'connect.php';

$sql = 'SELECT * FROM boatcomm';
$result = mysqli_query($link, $sql);

$available = 7;
$curent = 7;
$status = "Открыто";

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
		.round {
			background-color: #1A2326;
			border-radius: 30px;
			padding: 20px 0;
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
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-6">
				<a href="skate.php"> <- Скейтбординг</a>
			</div>
			<div class="col-6 text-end">
				<a href="rollers.php">Ролики -></a>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-5 round mx-auto text-center">
				<p>Свободно</p>
				<p><?php echo $available; ?> из <?php echo $curent; ?></p>
				<p><?php echo $status; ?></p>
			</div>
		</div>

		<div class="row">
			<div class="col-5 round mt-4 mx-auto text-center">
				<p>Расписание <br>
					ПН с 07:00-21:00 <br>
				    ВТ с 07:00-21:00 <br>
					СР с 07:00-21:00 <br>
					ЧТ с 07:00-21:00 <br>
					ПТ с 07:00-21:00 <br>
					СБ с 07:00-19:00 <br>
					ВС Выходной
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-5 mt-4 round mx-auto text-center">
				<p>Обращаться по номеру <br> <a href="tel:+79841026745">+79841026745</a></p>
			</div>
		</div>

		<div class="row">
			<div class="col-5 mt-4 round mx-auto text-center">
				<a href="preorder.php">Перейти к предзаказу</a>
			</div>
		</div>
	</div>

	<div class="container mt-5">
		<div class="row">
			<h1>Комментарии</h1>
		</div>
		<div class="row mt-3">
			<div class="commentDiv">
				<?php while ($row = mysqli_fetch_array($result)): ?>
					<p class="mb-0"><?= $row['comment']; ?></p>
					<p class="text-secondary" style="text-align: right;"><?= $row['author']; ?></p>
					<br>
				<?php endwhile; ?>
			</div>
		</div>
		<div class="row mt-5">
			<form action="boatP.php" method="post">
				<div class="mb-3 col-6 mx-auto">
					<label for="exampleFormControlTextarea1" class="form-label"></label>
					<input class="form-control" type="text" aria-label="default input example" name="author" placeholder="Имя">
				</div>
				<div class="mb-3 col-6 mx-auto">
				  	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment" placeholder="Ваш комментарий"></textarea>
				</div>
				<div class="col-1 mx-auto">
					<button name="sendComment" type="submit" class="btn btn-light">Отправить</button>
				</div>
			</form>
		</div>
	</div>

	<?php include('footer.php')?>
	
</body>
</html>