<!DOCTYPE html>
<html>
<head>
	<title>Update number of HR</title>
</head>
<body>
	<form method="post" action="upphnhr.php" >
		<center><fieldset>
		<legend><h1><i>Update Contact Number of HR</i></h1></legend>
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
            <input type="submit" name="save" value="Save"> <br>
            
            
	</form>
</body>
</html>
<?php 
	session_start();
	$name=$_SESSION['uname'];
	if(isset($_POST['back'])){
		$_SESSION['uname'] = $name;
		header("location: updatehr.php");
	}
	elseif (isset($_POST['save'])) {
		$db = mysqli_connect("localhost", "root", "","payrollsystem");
		$password = md5($_POST['password']);
        $sql = "SELECT * FROM hr WHERE password = '$password'";
        $ver = mysqli_query($db, $sql);
        if(mysqli_num_rows($ver) == 1){
			$phone = $_POST['phone'];
			$sql = "UPDATE hr SET number ='$phone' WHERE username = '$name'";
	        $verify = mysqli_query($db, $sql);
	        header("location: updonehr.php");
	    }else{
	    	echo "Password doesn't match";
	    }
	}
	?>
	</fieldset></center>
