<?php 

	$local = "localhost";
	$name = "root";
	$password = "";
	$db = "crud"; 

	$conn = mysqli_connect( $local, $name,  $password, $db);

	if (isset($conn)) {
		echo "";
	}else{
		
		echo "Error ao enviar arquivo!!!";
	}

?>