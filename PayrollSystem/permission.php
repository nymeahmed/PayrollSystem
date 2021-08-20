<!DOCTYPE html>
<html>
<head>
	<title>Permission for Signup</title>
</head>
<body>
	<center>
	<fieldset>
	<legend><h1><i>Permission of Signup for HR</i></h1></legend>
	<form method="post" action="permission.php">
		<p><b>Give the code which is provided by the admin for HR registration</b></p>
		<input type="text" name="permission"> <br> <br>
		<input type="submit" name="cancel" value="Go back">
		<input type="submit" name="submit" value="Check">
	</form>
	</fieldset>
	<?php 
	if(isset($_POST['cancel'])){
		header("location: home.php");
	}
	elseif (isset($_POST['submit'])) {
		$check = $_POST['permission'];
		if ($check ==  12345){ //token=12345
			header("location: hrsignup.php");
		}
		else {
			echo "Permission code doesn't match <br>";
			//header("location: home.php");
		}
	}
	?>
</center>
</body>
</html>