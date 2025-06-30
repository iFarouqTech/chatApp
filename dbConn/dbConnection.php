<?php
	
	require __DIR__ . "/../vendor/autoload.php";
	$dotENV = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
	$dotENV->load();


	$host 		= $_ENV['DB_HOSTNAME'];
	$user 		= $_ENV['DB_USERNAME'];
	$password 	= $_ENV['DB_PASSWORD'];
	$db 		= $_ENV['DB_NAME'];

	try{
		$conn = new mysqli($host, $user, $password, $db);

		if ($conn->connect_error) {
			die("Connection Failed: " . $conn->connect_error);
		}
		// else{
		// 	echo "Connection Succesfully";
		// }
	}
	catch(mysqli_sql_exception){
		echo "Something's wrong with DataBase connection!!!";
	}
	// die();
