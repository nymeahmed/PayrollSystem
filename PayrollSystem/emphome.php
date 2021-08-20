<center><fieldset>
<?php
	session_start();
	$name=$_SESSION['uname'];
	if(isset($_SESSION['uname'])) {
	    echo "<legend><i><h1>Hello ".$_SESSION['uname'];
	    echo "<br>Welcome to the Employee portal.</h1></i></legend>";
	}
	if(isset($_POST['logout'])){
		header("location: emplogout.php");
	}
	elseif (isset($_POST['updateemp'])) {
		$_SESSION['uname'] = $name;
		header("location: updateemp.php");
	}
	elseif (isset($_POST['viewemp'])) {
		$_SESSION['uname'] = $name;
		header("location: viewemp.php");
	}
	elseif(isset($_POST['payment'])){
		$_SESSION['uname'] = $name;
		header("location: historyemp.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page of Employee</title>
</head>
<body>
	<form method="post" action="emphome.php" >
		<input type="submit" name="viewemp" value="View My Profile"> <br> <br>
		<input type="submit" name="updateemp" value="Update My Profile"> <br> <br>
		<input type="submit" name="payment" value="My Payment History"> <br> <br>
		<input type="submit" name="logout" value="Log out"> <br> <br>
	</form>
</body>
</html>
</fieldset></center>