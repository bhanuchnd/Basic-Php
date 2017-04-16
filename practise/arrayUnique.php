<?php
	$array = array(1,2,3,4,5,1,3,4);
	$array2 = array(1);
	$base = array_replace($array, $array2);
	var_dump($base);
?>