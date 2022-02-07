<?php
	// host, user, password , dbname, port
	//$conn = new mysqli("192.168.219.169","root","ghddmlvy12!@","php","3306")
	//mysqli_query($conn,"set names utf8");
	$host='192.168.219.169';
	$user='kali';
	$pw='kali';
	$dbName='php';
	$conn = new mysqli($host,$user,$pw,$dbName);

	if($conn){
		echo "connect<br>";	
	}
	else{
		echo "disconnect <br>";	
	}
 
?>
