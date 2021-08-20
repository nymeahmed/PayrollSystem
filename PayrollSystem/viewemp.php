<?php
	session_start();
	$name=$_SESSION['uname'];
	if(isset($_POST['back'])){
		$_SESSION['uname'] = $name;
		header("location: emphome.php");
	}
	$db = mysqli_connect("localhost", "root", "","payrollsystem");
	$sql = "SELECT * FROM emp WHERE username='$name'";
	$result = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Employee Profile</title>
    </head>
    <body>
        <center><i><h1><u>My Profile</u></h1></i></center>
        <fieldset>
        <form method="post" action="viewemp.php">
            <?php
            if (mysqli_num_rows($result) == 0) 
            {
                echo "No rows found, nothing to print!";
                exit;
            }
            while ($row = mysqli_fetch_assoc($result)) 
            {
                echo "<b>Employee Username: </b>".$row["username"]."<br>";
                echo "<b>Contact Number: </b>".$row["phone"]."<br>";
                echo "<b>Email Address: </b>".$row["email"]."<br>";
                echo "<b>Address: </b>".$row["address"]."<br>";
            }
            ?>
            </br>
            </fieldset>
            <br>
            <center><input type="submit" name="back" value="Go Back"></center>
        </form>
    </body>
<html>