<?php
	require('_conn.php');
	$id=$_POST['id'];
	$pw=$_POST['pw'];

	//select, insert, delete, update
	$sql = "SELECT * FROM user WHERE id='$id' AND pw='$pw'";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($result);
	//echo "hihi<br>";
	//echo "$row<br>";
	//echo "$id<br>";
	//echo "$pw<br>";
	if($row >  0){
		//login
		require('_loginok.php');	
		echo "<script>alert('login success');location.href='index.php'</script>";
	} else{
		echo "<script>alert('login fail, check your id or password');location.href='login.php'</script>";

	}
	
?>
