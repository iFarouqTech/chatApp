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
		else{
			echo "Connection Succesfully";
		}
	}
	catch(mysqli_sql_exception){
		echo "Something's wrong with DataBase connection!!!";
	}
	die();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- FAVICON -->
	<link rel="icon" type="image/x-icon" href="imgs/favicon/chat-dots.svg">

	<!-- jQUERY FILE -->
	<script type="text/javascript" src="jsFiles/jQuery/jQuery3.7.1.js"></script>

	<!-- BOOTSTRAP FILES -->
	<link rel="stylesheet" type="text/css" href="cssFiles/bootstrap/bootstrap5.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<script type="text/javascript" src="jsFiles/bootstrap/bootstrap5.js"></script>

	<!-- SYSTEM CSS FILES -->
	<link rel="stylesheet" type="text/css" href="cssFiles/index.css">
	<link rel="stylesheet" type="text/css" href="cssFiles/menuBar.css">
	<link rel="stylesheet" type="text/css" href="cssFiles/subMenu.css">
	<link rel="stylesheet" type="text/css" href="cssFiles/chatContainer.css">
	<link rel="stylesheet" type="text/css" href="cssFiles/friends.css">

	<style type="text/css">
		.layout{
			height: 100vh;
			overflow: auto;
		}
	</style>
</head>
<body>
	<main>
		<div class="container-fluid">
			
		<?php require "incs/systemFunctions.php"; ?>