<?php
	session_unset();
	session_destroy();
	session_start();
	echo "<script>alert('You are currently logged out.');location.href='login.php'</script>";
		
?>

