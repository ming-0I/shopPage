<?php
	$host='192.168.219.169';
	$user='kali';
	$pw='kali';
	$dbName='php';
	$mysqli = new mysqli($host,$user,$pw,$dbName);

	if($mysqli){
		echo "connect<br>";	
	}
	else{
		echo "disconnect <br>";	
	}
?>
