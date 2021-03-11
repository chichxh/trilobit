<?php 
    require 'connect.php';

    $sql = 'SELECT * FROM foodcortcomm';
	$result = mysqli_query($link, $sql);
	
    if (isset($_POST['sendComment'])) {
        $query = "INSERT INTO foodcortcomm (author, comment) VALUES ('". $_POST['author'] ."', '". $_POST['comment'] ."')";
        $res = mysqli_query($link, $query);
    }

    header("Location: foodCort.php")
 ?>