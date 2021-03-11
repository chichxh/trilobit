<?php 
	require 'connect.php';
	
    if (isset($_POST['send'])) {
        $query = "INSERT INTO preorder (name, contact) VALUES ('". $_POST['name'] ."', '". $_POST['contact'] ."')";
        $res = mysqli_query($link, $query);
    }

    header("Location: preorder.php")
 ?>