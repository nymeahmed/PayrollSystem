<?php 
	session_start();
	$name=$_SESSION['uname'];
	if(isset($_POST['back'])){
		$_SESSION['uname'] = $name;
		header("location: hrhome.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete an employee</title>
</head>
<body>
	<form method="post" action="delemp.php" >
		<center><fieldset>
		<legend><h1><i>Delete an Employee</i></h1></legend>
		<table>
			<tr>
				<td>Employee Username</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Your HR password</td>
				<td><input type="password" name="unae"></td>
			</tr>
            <!--<tr>
                <td><input type="submit" name="back" value="Back"></td>
                <td><input type="submit" name="save" value="Delete"></td>
            </tr>-->
        </table>
        <input type="submit" name="back" value="Back">
    	<input type="submit" name="save" value="Delete"> <br>
	</form>
</body>
</html>
<?php 
	if (isset($_POST['save'])) {
		$db = mysqli_connect("localhost", "root", "","payrollsystem");
		$uname = $_POST['uname'];
		$sql = "SELECT * FROM emp WHERE username ='$uname'";
	    $verify = mysqli_query($db, $sql);
	    if(mysqli_num_rows($verify) == 1){//   echo"Authentication";
	        //echo "Matched";
	    	$sq2 = "DELETE FROM emp WHERE username ='$uname'";
	    	$verify2 = mysqli_query($db, $sq2);
	    	header("location: delempdone.php");
	    }else{
	        echo "Username of employee/your password is invalid";
	    }
	}
?>
</fieldset></center>