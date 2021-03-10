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

$sql = 'SELECT * FROM rollerscomm';
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
				<h1 class="text-center">Ролики</h1>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-6">
				<a href="boat.php"> <- Лодки</a>
			</div>
			<div class="col-6 text-end">
				<a href="foodCort.php">Фуд-корт -></a>
			</div>
		</div>
	</div>

	<div class="container">
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
		<div class="row mt-5 mb-5">
			<form action="rollers.php" method="post">
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

			<?php 
			    if (isset($_POST['sendComment'])) {
			        $query = "INSERT INTO rollerscomm (author, comment) VALUES ('". $_POST['author'] ."', '". $_POST['comment'] ."')";
			        $res = mysqli_query($link, $query);
			    }
			 ?>
		</div>
	</div>
	
	<?php include('footer.php')?>
</body>
</html>