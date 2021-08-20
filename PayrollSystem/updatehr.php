<?php 
	session_start();
	$name=$_SESSION['uname'];
	/*if(isset($_SESSION['uname'])) {
	    echo "<h1>Hello ".$_SESSION['uname']."<br> <br>";
	}*/
	if(isset($_POST['upphn'])){
		$_SESSION['uname'] = $name;
		header("location: upphnhr.php");
	}
	else if(isset($_POST['upemail'])) {
		$_SESSION['uname'] = $name;
		header("location: upemailhr.php");
	}
	else if(isset($_POST['uppass'])){
		$_SESSION['uname'] = $name;
		header("location: uppasshr.php");
	}
	else if(isset($_POST['back'])){
		$_SESSION['uname'] = $name;
		header("location: hrhome.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update HR Profile</title>
</head>
<body>
	<center><fieldset>
	<legend><i><h1>Update Profile</h1></i></legend>
	<form method="post" action="updatehr.php" >
		<input type="submit" name="upphn" value="Update Contact Number"> <br> <br>
		<input type="submit" name="upemail" value="Update Email Address"> <br> <br>
		<input type="submit" name="uppass" value="Update Password"> <br> <br>
		<input type="submit" name="back" value="Go Back"> <br> 
	</form>
	</fieldset></center>
</body>
</html>