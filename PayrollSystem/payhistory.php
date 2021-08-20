<?php
	session_start();
	$name=$_SESSION['uname'];
	if(isset($_POST['back'])){
		$_SESSION['uname'] = $name;
		header("location: hrhome.php");
	}
	$db = mysqli_connect("localhost", "root", "","payrollsystem");
	$sql = "SELECT * FROM salary WHERE payment_by='$name'";
	$result = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Payment history</title>
    </head>
    <body>
        <center><h1><i><u>Payment History</u></i></h1></center>
        <?php 
            echo "<center>Done by ".$name."</center>";
        ?>
        <form method="post" action="payhistory.php">
            <fieldset>
            <?php
            if (mysqli_num_rows($result) == 0) 
            {
                echo "No rows found, nothing to print!";
                exit;
            }
            while ($row = mysqli_fetch_assoc($result)) 
            {
                echo "<b>Employee Username: </b>".$row["empuname"]."<br>";
                echo "<b>Payment Month: </b>".$row["month"]."<br>";
                echo "<b>Payment Date: </b>".$row["date"]."<br>";
                echo "<b>Amount of salary: </b>".$row["amount"]."<br>";
                echo "<hr>";
            }
            ?>
            </fieldset>
            <br>
            <center><input type="submit" name="back" value="Go Back"></center>
        </form>
    </body>
<html>