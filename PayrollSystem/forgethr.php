<!DOCTYPE html>
<html>
<head>
	<title>Recover Password for HR</title>
</head>
<body>
    <center><fieldset>
	<legend><i><h1>Recover Password</h1></i></legend>
	<form method="post" action="forgethr.php">
        <table>
            <tr>
                <td>HR Username</td>
                <td><input type="text" name="uname"></td>
            </tr>
            <tr>
                <td>HR Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <!--<tr>
                <td><input type="submit" name="back" value="Go back"></td>
                <td><input type="submit" name="getpass" value="Get Password"></td>
            </tr>-->
        </table>
        <input type="submit" name="back" value="Go back">
        <input type="submit" name="getpass" value="Get Password">
    </form>
    
</body>
</html>
<?php
	if(isset($_POST['getpass'])) {
		$email = $_POST['email'];
		$name=$_POST['uname'];
		$db = mysqli_connect("localhost", "root", "","payrollsystem");
		$sql = "SELECT * FROM hr WHERE username='$name' AND email='$email'";
		$result = mysqli_query($db,$sql);

		if (mysqli_num_rows($result) == 0) {
        	echo "Incorrect username and email";
        	//exit;
    	}
    	while ($row = mysqli_fetch_assoc($result)) {
        	echo "<b>Password: '</b>".$row["password"]."'<br>";
        	echo "<a href='https://md5.gromweb.com' target='_blank'>Reverse this MD5 hash to string</a>";
    	}
    }
    elseif (isset($_POST['back'])) {
    	header("location: hrlogin.php");
    }
?> 
</fieldset></center>
  