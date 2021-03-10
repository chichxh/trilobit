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
	<style type="text/css"></style>
</head>
<body>
	<button class="btn btn-secondary" id="generateQRCode" name="send">Сгенерироваь код</button>

	 <div id="qrCodeOutput" class="text-center">
            Здесь будет сгенерированный QR-код
        </div>

	<script src="http://cosmic.mearie.org/2011/01/qrjs/qr.js"></script>
    <script>

        const el = (selector) => document.querySelector(selector);



        el('#generateQRCode').addEventListener('click', function() {
           
            let qrCodeOutput = el('#qrCodeOutput');

            var array = new Uint32Array(10);
			window.crypto.getRandomValues(array);
            let text = array;

            qrCodeOutput.innerHTML = "";

            qrCodeOutput.append(QRCode.generateHTML(text, {}))
        });

    </script>

    <?php 
    	if (isset($_POST['send'])) {

    	$queryDost = "INSERT INTO users (code, user) VALUES ('". $_POST['name'] ."', '". $_POST['decription'] ."')";
        $resDost = mysqli_query($link, $queryDost);
    }
     ?>
</body>
</html>
