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
		body {
			font-family: 'Montserrat', Arial;
			color: #fff;
			background-color: #2A363B;
		}
	</style>
</head>
<body>
	<?php include('header.php')?>
	<div class="container">
		<h1>Если вы хотите посчитать ваши расходы автоматически, используйте это</h1>
	</div>
	<div class="container mt-5">
		<div class="col-6 mb-5">
			<button id="generateQRCode" class="btn btn-light">Сгенерировать код</button>
		</div>
		<form action="myAcc.php" method="POST">
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label"></label>
				<input class="form-control" type="hidden" name="code" id="code">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Напишите ваше Ф.И.О.</label>
				<input class="form-control" type="text" name="user">
			</div>
			<button name="send" class="btn btn-light">Начать отсчет</button>
		</form>
	</div>
    <div class="container">
    	<div class="row d-flex justify-content-center">
    		<div id="qrCodeOutput" class="mt-5">
		        <p>Нажми на кнопку, чтобы увидеть свой персональный код, можете сделать скриншот, также лучше не обновляйте страницу</p>
		    </div>
    	</div>
    </div>

	<script src="http://cosmic.mearie.org/2011/01/qrjs/qr.js"></script>
    <script>
        const el = (selector) => document.querySelector(selector);

        el('#generateQRCode').addEventListener('click', function() {
           
            let qrCodeOutput = el('#qrCodeOutput');

            var array = new Uint32Array(10);
			window.crypto.getRandomValues(array);

            qrCodeOutput.innerHTML = "";

            qrCodeOutput.append(QRCode.generateHTML(array, {}))	

            document.getElementById("code").value=array;
        });
    </script>


    <?php 
		if (isset($_POST['send'])) {
		$query = "INSERT INTO users (code, user) VALUES ('". $_POST['code'] ."', '". $_POST['user'] ."')";
	    $res = mysqli_query($link, $query);
	}
	 ?>
    
</body>
</html>

