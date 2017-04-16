<?php 

	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "admin";
	$dbName = "practise";
	global $conn;
	$dsn = "mysql:host=$host;dbname=$dbName";
	//echo $dsn;
	try {
		
		$conn = new PDO($dsn, $dbUsername,$dbPassword,array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT));
		//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// die(json_encode(array('outcome' => true)));
		// var_dump($conn);

	// 	$stmt = $conn -> prepare("SELECT * FROM student");
		
		

	// 	if($stmt->execute()) {	
	// 	while ($row = $stmt->fetch()) {
	// 		echo $row['name'].$row['age']."<br>";
	// 	}
	// }
	} catch (Exception $e) {

		die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
		
	}
	





?>