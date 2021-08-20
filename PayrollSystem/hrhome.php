<center><fieldset>
	<?php
	session_start();
	$name=$_SESSION['uname'];
	if(isset($_SESSION['uname'])) {
	    echo "<legend><h1><i>Hello ".$_SESSION['uname'];
	    echo "<br>Welcome to the HR portal.</i></h1></legend>";
	}

	if(isset($_POST['updatehr'])){
		$_SESSION['uname'] = $name;
		header("location: updatehr.php");
	}
	else if(isset($_POST['addemp'])) {
		$_SESSION['uname'] = $name;
		header("location: addemp.php");
	}
	else if(isset($_POST['delemp'])){
		$_SESSION['uname'] = $name;
		header("location: delemp.php");
	}
	else if(isset($_POST['logout'])){
		header("location: hrlogout.php");
	}
	else if(isset($_POST['viewhr'])){
		$_SESSION['uname'] = $name;
		header("location: viewhr.php");
	}
	else if(isset($_POST['viewemp'])){
		$_SESSION['uname'] = $name;
		header("location: viewemplist.php");
	}
	else if(isset($_POST['payment'])){
		$_SESSION['uname'] = $name;
		header("location: payment.php");
	}
	else if(isset($_POST['history'])){
		$_SESSION['uname'] = $name;
		header("location: payhistory.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page of HR</title>
</head>
<body>
	<form method="post" action="hrhome.php" >
		<table>
			<tr>
				<td><input type="submit" name="viewhr" value="View My Profile"> </td>
				<td><input type="submit" name="updatehr" value="Update My Profile"></td>
			</tr>
		</table>
		<br>
		<input type="submit" name="viewemp" value="View Employees list">
		<br> <br>
		<table>
			<tr>
				<td><input type="submit" name="payment" value="Paying Employees"></td>
				<td><input type="submit" name="history" value="Payment History"></td>
			</tr>
			<tr>
				<td><input type="submit" name="addemp" value="Adding Employee"></td>
				<td><input type="submit" name="delemp" value="Delete Employee"></td>
			</tr>
		</table>
		<br>
		<input type="submit" name="logout" value="Log out"> <br> <br>
	</form>
</body>
</html>
</fieldset></center>