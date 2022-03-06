<?php 
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "pro4";
	try {
		$connect = new PDO("mysql:host = $serverName;dbname=$dbName;charset=utf8",$userName,$password);
	} catch (Exception $e) {
		var_dump($e->getMessage());
		die;
	}
	// var_dump($connect);
	// die;
	// $sql = "SELECT * from users";
	// $stmt = $connect->prepare($sql);
	// $stmt->execute();
	// $users=$stmt->fetchAll();
	// var_dump($users);


 ?>