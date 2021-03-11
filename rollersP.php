<?php 
    require 'connect.php';

    $sql = 'SELECT * FROM rollerscomm';
	$result = mysqli_query($link, $sql);
	
    if (isset($_POST['sendComment'])) {
        $query = "INSERT INTO rollerscomm (author, comment) VALUES ('". $_POST['author'] ."', '". $_POST['comment'] ."')";
        $res = mysqli_query($link, $query);
    }

    header("Location: rollers.php")
 ?>