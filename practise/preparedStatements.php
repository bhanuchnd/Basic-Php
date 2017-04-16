<?php 

	include 'PDOConn.php';
	$stmt = $conn -> prepare("SELECT name, age FROM student");
	if($stmt -> execute()) {
		while($row = $stmt->fetch()) {
			echo $row['name']." and ".$row['age']."<br>";
		}
	}
	
?>