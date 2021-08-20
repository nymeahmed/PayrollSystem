<!DOCTYPE html>
<html>
<head>
	<title>Update password of HR</title>
</head>
<body>
	<form method="post" action="uppasshr.php" >
        <center><fieldset>
        <legend><h1><i>Update Password of HR</i></h1></legend>
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
        $ppassword = md5($_POST['ppassword']);
        $sql = "SELECT * FROM hr WHERE password = '$ppassword'";
        $ver = mysqli_query($db, $sql);
        if(mysqli_num_rows($ver) == 1){
            $cpass = md5($_POST['cpassword']);
            $password = md5($_POST['password']);
            if($cpass == $password){
               	$db = mysqli_connect("localhost", "root", "","payrollsystem");
    			$password = md5($_POST['password']);
    			$sql = "UPDATE hr SET password ='$password' WHERE username = '$name'";
    		    $verify = mysqli_query($db, $sql);
    		    header("location: updonehr.php");
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