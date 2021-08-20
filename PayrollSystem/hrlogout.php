<?php
session_start();
	if(isset($_SESSION['fname']) && $_SESSION['lname'] && $_SESSION['uname'] && $_SESSION['gender']
   		&& $_SESSION['number'] && $_SESSION['address'] && $_SESSION['email'] ) {
    	session_destroy();
    	echo "<center><h1>You have been logged out successfully! </h1><br>";
    	echo "<h3><a href='home.php'>Go to the home page of the system</a></center></h3>";
	}else {
		echo "<center><h1>You have been logged out successfully from HR portal! </h1><br>";
		echo "<h3><a href='home.php'>Go to the home page of the system</a></center></h3>";
    	//header("location: home.php")
    };
?>