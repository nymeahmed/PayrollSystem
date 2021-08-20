<!DOCTYPE html>
<html>
<head>
	<title>Update password of Employee</title>
</head>
<body>
	<form method="post" action="uppassemp.php" >
        <center><fieldset>
        <legend><i><h1>Update Passoword of Employee</h1></i></legend>
		<table>
                <tr>
                    <td>Previous Password</td>
                    <td><input type="password" name="ppassword"></td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td><input type="password" name="cpassword"></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
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
        $ppassword = $_POST['ppassword'];
        $sql = "SELECT * FROM emp WHERE password = '$ppassword'";
        $ver = mysqli_query($db, $sql);
        if(mysqli_num_rows($ver) == 1){
            $cpass = $_POST['cpassword'];
            $password = $_POST['password'];
            if($cpass == $password){
               	$db = mysqli_connect("localhost", "root", "","payrollsystem");
    			$password = $_POST['password'];
    			$sql = "UPDATE emp SET password ='$password' WHERE username = '$name'";
    		    $verify = mysqli_query($db, $sql);
    		    header("location: updoneemp.php");
            }
            else {
                echo "New password and confirm password doesn't match";
            }
        }
        else{
            echo "Previous password doesn't match";
        }
	}
?>
</fieldset></center>