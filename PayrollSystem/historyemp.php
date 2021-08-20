<?php 
	session_start();
	$name=$_SESSION['uname'];
	if(isset($_POST['back'])){
		$_SESSION['uname'] = $name;
		header("location: emphome.php");
	}
	$db = mysqli_connect("localhost", "root", "","payrollsystem");
	$sql = "SELECT * FROM salary WHERE empuname = '$name'";
	$result = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Payment History</title>
    </head>
    <body>
        <center><h1><i><u>My payment history</u></i></h1></center>
        <form method="post" action="historyemp.php">
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
                echo "<b>Payment Month: </b>".$row["month"]."<br>";
                echo "<b>Payment Date: </b>".$row["date"]."<br>";
                echo "<b>Amount: </b>".$row["amount"]."<br>";
                echo "<b>Payment By(HR Username): </b>".$row["payment_by"]."<br>";
                echo "<hr>";
            }
            ?>
            </fieldset>
            <br>
            <center><input type="submit" name="back" value="Go Back"></center>
        </form>
    </body>
<html>