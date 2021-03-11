<?php 
    require 'connect.php';

    $sql = 'SELECT * FROM skatecomm';
	$result = mysqli_query($link, $sql);
	
    if (isset($_POST['sendComment'])) {
        $query = "INSERT INTO skatecomm (author, comment) VALUES ('". $_POST['author'] ."', '". $_POST['comment'] ."')";
        $res = mysqli_query($link, $query);
    }

    header("Location: skate.php")
 ?>