<?php
	session_start();
	$name=$_SESSION['uname'];
	if(isset($_POST['back'])){
		$_SESSION['uname'] = $name;
		header("location: hrhome.php");
	}
?>
<?php 
	$db = mysqli_connect("localhost", "root", "", "payrollsystem");
	if(isset($_POST['save'])) {
        session_start();;
        $uname = $_POST['uname'];
        $password = $_POST['password'];
        $sql = "INSERT INTO emp (username, password ) VALUES('$uname', '$password')";
        mysqli_query($db, $sql); //data is inserted into the database
        $_SESSION['uname2']=$uname;
        $_SESSION['password2']=$password;
        header("location: addempsuccess.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Number of HR</title>
</head>
<body>
	<form method="post" action="addemp.php">
        <center><fieldset>
        <legend><i><h1>Add an Employee</h1></i></legend>
        <table>
            <tr>
                <td>Employee Username</td>
                <td><input type="text" name="uname"></td>
            </tr>
            <tr>
                <td>Employee Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Your HR Password</td>
                <td><input type="password" name="pasasdsword"></td>
            </tr>
            <!--<tr>
            	
            </tr>-->
        </table>
        <input type="submit" name="back" value="Back">
        <input type="submit" name="save" value="Save"> <br>
	</form>
</body>
</html>
</fieldset></center>