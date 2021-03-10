<!DOCTYPE html>
<html>
<head>
	<title>Трилобит - Городская среда</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<style type="text/css">
		.header {
			height: 720px;
		}
		.slog {
			padding-top: 300px;
		}
		.block {
			width: 10px;
			height: 70px;
			background-color: #c4c4c4;
		}
		.col-1 {
			/*margin-right: 20px;*/
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
			margin-top: 20px;
			height: 80px;
			background-color: #232323;
			color: #FBFEF9;
		}
		.footer .col-6, .footer .col-5 {
			margin-top: 30px;
		}
	</style>
</head>
<body>
	<div class="header">
		<div class="container-fluid d-flex flex-row-reverse">
			<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
			    <div class="container-fluid">
				    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				      		<span class="navbar-toggler-icon"></span>
				    	</button>
			    	<div class="collapse navbar-collapse ml-5" id="navbarNav">
				      	<ul class="navbar-nav">
					        <li class="nav-item">
					          	<a class="nav-link active" aria-current="page" href="#">Новости</a>
					        </li>
					        <li class="nav-item">
					          	<a class="nav-link" href="#">Аренда</a>
					        </li>
					        <li class="nav-item">
					          	<a class="nav-link" href="#">Акции</a>
					        </li>
					        <li class="nav-item">
					          	<a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Куда потратить деньги</a>
					        </li>
				        </ul>
			    	</div>
			  	</div>
			</nav>
		</div>

		<div class="container-fluid">
			<div class="row">
				<h3 class="text-center slog">Крутой слоган</h3>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-2 mx-auto mt-5">
				<button type="button" class="btn btn-secondary">Пафосная кнопка</button>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-8 mx-auto text-center">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>

	<div class="container mt-5">
		<div class="row">
			<div class="col-1">
				<div class="block"></div>
			</div>
			<div class="col-11">
				<h1>НОВОСТИ</h1>
			</div>
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
				</div>


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

	<div class="footer mt-5">
		<div class="row">
			<div class="col-6 d-flex justify-content-center">
				<p>Сайт был разработан командой "Бутылка Коламбии"</p>
			</div>
			<div class="col-5 d-flex justify-content-center">
				<p>2021</p>
			</div>
		</div>
	</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>