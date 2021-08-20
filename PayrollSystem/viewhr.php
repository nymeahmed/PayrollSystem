<?php
	session_start();
	$name=$_SESSION['uname'];
	if(isset($_POST['back'])){
		$_SESSION['uname'] = $name;
		header("location: hrhome.php");
	}
	$db = mysqli_connect("localhost", "root", "","payrollsystem");
	$sql = "SELECT * FROM hr WHERE username='$name'";
	$result = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
    <title>HR Profile</title>
    </head>
    <body>
        <center><i><h1><u>My Profile</u></h1></i></center>
    <fieldset>
        
        <form method="post" action="viewhr.php">
            <?php
            if (mysqli_num_rows($result) == 0) 
            {
                echo "No rows found, nothing to print!";
                exit;
            }
            while ($row = mysqli_fetch_assoc($result)) 
            {
                //echo "ID: ".$row["id"]."<br>";
                echo "<b>Firstname: </b>".$row["firstname"]."<br>";
                echo "<b>Lastname: </b>".$row["lastname"]."<br>";
                echo "<b>Fullname: </b>".$row["firstname"]." ".$row["lastname"]."<br>";
                echo "<b>Gender: </b>".$row["gender"]."<br>";
                echo "<b>HR Username: </b>".$row["username"]."<br>";
                echo "<b>Contact Number: </b>".$row["number"]."<br>";
                echo "<b>Email Address: </b>".$row["email"]."<br>";
                echo "<b>Address: </b>".$row["address"]."<br>";
            }
            ?>
            <br>
        </fieldset>
        <br>
        <center><input type="submit" name="back" value="Go Back"></center>
        </form>
    </body>
<html>