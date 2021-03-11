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

?>

<!DOCTYPE html>
<html>
<head>
	<title>Трилобит - Городская среда</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
		body{
			font-family: 'Montserrat', Arial;
			background-color: #2A363B;
			color: #fff;
		}
		.header {
			background-image: url(img/header.jpg);
			height: 720px;
			background-size: cover;
			color: #fff;
		}
		.container-fluid p {
			font-size: 30px;
		}
		h1 {
			font-weight: bold;	
		}
		.nav-link	 {
			color: #fff;
		}
		.header h1{
			font-family: 'Archivo Black';
		}
		.slog {
			padding-top: 300px;
		}
		.block {
			width: 10px;
			height: 70px;
			background-color: #c4c4c4;
		}
		.card {
			border: 0;
			max-width: 540px;
			margin-right: 1rem;
			transition: 0.2s;
			bottom: -10px;
		}
		.card:hover {
			background-color: #bfffba;
			bottom:0px;
		}
		.footer {
			padding-top: 25px;
			height: 80px;
			background-color: #232323;
			color: #FBFEF9;
		}
	</style>
</head>
<body>
	<div class="header">
		<?php include('header.php')?>
		<div class="container-fluid">
			<div class="row">
				<h1 class="text-center slog">Trilobite</h1>
			</div>
		</div>
	</div>

	<div class="container-fluid">

		<div class="row mt-5">
			<div class="col-9 mx-auto text-left">
				<h1>О проекте</h1>
				<p>Целью проекта является разработка на основе анализа современного состояния территории функционально-планировочной и архитектурно-пространственной концепции общественного городского пространства.</p>
			</div>
			<div class="col-9 mx-auto text-left mt-5">
				<h1>Для чего сайт?</h1>
				<p>Сайт был разработан с целью облегчения процесса отдыха на  набережной.</p>
			</div>
			<div class="col-9 mx-auto text-left mt-5">
				<h1>Коротко о бонусах</h1>
				<p>Посещая сайт и показывая актиность в нем, у вас появится возможность получить разные скидки и плюшки.</p>
			</div>
			<div class="col-9 mx-auto text-left mt-5">
				<h1>Топы</h1>
				<?php 
				 // select dot, clicks from table where yx=1 ORDER BY clicks ASC;
				 ?>
			</div>
		</div>
	</div>

	<div class="container mt-5">
		<!-- <div class="row">
			<h1>НОВОСТИ</h1>
		</div>

		<div class="container mt-5">
			<div class="row">
				<div class="card mb-3 col-6 p-0">
				  	<div class="row g-0">
				    	<div class="col-md-4">
				      		<img src="" width="100%">
				    	</div>
			   			<div class="col-md-8">
				      		<div class="card-body">
				        		<h5 class="card-title">Заголовок Новости</h5>
			        			<p class="card-text">Опсание</p>
				      		</div>
				    	</div>
				  	</div>
				</div> -->


				<!-- <?php while ($row = mysqli_fetch_array($result)): ?>
					<div class="card mb-3 col-6 p-0">
					  	<div class="row g-0">
					    	<div class="col-md-4">
					      		<img src="<?= $row['img']; ?>" width="100%">
					    	</div>
				   			<div class="col-md-8">
					      		<div class="card-body">
					        		<h5 class="card-title"><?= $row['name']; ?></h5>
				        			<p class="card-text"><?= $row['decription']; ?></p>
					      		</div>
					    	</div>
					  	</div>
					</div>
				<?php endwhile; ?> -->
			</div>
		</div>
	</div>

<?php include('footer.php') ?>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>