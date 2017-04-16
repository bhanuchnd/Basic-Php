<?php
$server = 'localhost';
$username = 'root';
$password = 'admin';
$dbName = 'practise';
$conn = mysql_pconnect($server,$username,$password);
mysql_select_db($dbName,$conn);
if($conn -> connect_errno) {
	echo "Connection Failed: ". $conn->connect_errno;
} else 
	echo "Connected Succesfully";
?>