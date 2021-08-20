<!DOCTYPE html>
<html>
<head>
	<title>Midterm Project</title>
</head>
<body>
	<center>
	<fieldset>
	<legend><h1><u><i>Payroll System</i></u></h1></legend>
	<form method="post" action="home.php">
	<input type="submit" name="hrlogin" value="HR Login"> <br> <br>
	<input type="submit" name="hrsignup" value="HR Signup"> <br> <br>
	<input type="submit" name="emplogin" value="Employee Login"> <br> <br>
	</form>

	<?php 
	if(isset($_POST['hrlogin'])){
		header("location: hrlogin.php");
	}
	else if(isset($_POST['hrsignup'])) {
		//header("location: hrsignup.php");
		header("location: permission.php");
	}
	else if(isset($_POST['emplogin'])){
		header("location: emplogin.php");
	}
	else 
		echo "Please select one";
	?>
	</fieldset>
	</center>
</body>
</html>