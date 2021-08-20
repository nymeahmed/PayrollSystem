<!DOCTYPE html>
<html>
<head>
	<title>Update number of Employee</title>
</head>
<body>
	<form method="post" action="upphnemp.php" >
		<center><fieldset>
        <legend><i><h1>Update Contact Number of Employee</h1></i></legend>
		<table>
                <tr>
                    <td>New Contact Number</td>
                    <td><input type="tel" name="phone"></td>
                </tr>
                <tr>
                    <td>Re-write your password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <!--<tr>
                    <td><input type="submit" name="back" value="Back"></td>
                    <td><input type="submit" name="save" value="Save"></td>
                </tr>-->
            </table>
            <input type="submit" name="back" value="Back">
            <input type="submit" name="save" value="Save"><br>
	</form>
</body>
</html>
<?php 
	session_start();
	$name=$_SESSION['uname'];
	if(isset($_POST['back'])){
		$_SESSION['uname'] = $name;
		header("location: updateemp.php");
	}
	elseif (isset($_POST['save'])) {
		$db = mysqli_connect("localhost", "root", "","payrollsystem");
		$password = $_POST['password'];
        $sql = "SELECT * FROM emp WHERE password = '$password'";
        $ver = mysqli_query($db, $sql);
        if(mysqli_num_rows($ver) == 1){
			$phone = $_POST['phone'];
			$sql = "UPDATE emp SET phone ='$phone' WHERE username = '$name'";
	        $verify = mysqli_query($db, $sql);
	        header("location: updoneemp.php");
	    }else{
	    	echo "Password doesn't match";
	    }
	}
?>
</fieldset></center>