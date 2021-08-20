<?php
	session_start();
	$name=$_SESSION['uname'];
	if(isset($_POST['back'])){
		$_SESSION['uname'] = $name;
		header("location: hrhome.php");
	}
	$db = mysqli_connect("localhost", "root", "","payrollsystem");
	$sql = "SELECT * FROM emp";
	$result = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Employees List</title>
    </head>
    <body>
        <center><h1><i><u>List of Current Employees</u></i></h1></center>
        <form method="post" action="viewemplist.php">
            <fieldset>
            <?php
            if (mysqli_num_rows($result) == 0) 
            {
                echo "No rows found, nothing to print!";
                exit;
            }
            while ($row = mysqli_fetch_assoc($result)) 
            {
                //echo "ID: ".$row["id"]."<br>";
                echo "<b>Employee Username: </b>".$row["username"]."<br>";
                echo "<b>Contact Number: </b>".$row["phone"]."<br>";
                echo "<b>Email Address: </b>".$row["email"]."<br>";
                echo "<b>Address: </b>".$row["address"]."<br>";
                echo "<hr>";
            }
            ?>
            </fieldset>
            <br>
            <center><input type="submit" name="back" value="Go Back"></center>
        </form>
    </body>
<html>