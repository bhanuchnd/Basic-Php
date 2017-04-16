<?php 
$conn =mysql_connect('localhost','root','admin');
if($conn->connect_error) {
	die("connection failed: ".$conn->connect_error);
}
mysql_select_db('practise');
echo "Connected Succesfully";
$sql = "select * from testphp";
$result =mysql_query($sql);
$array = array();
while ($row = mysql_fetch_array($result)) {
	$array = $row;
}
foreach ($array as $key => $value) {
	echo $array[$key]."<br>";
}

?>
