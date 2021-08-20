<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
</head>
<body>
<center><fieldset>
<legend><i><h1>Payment for employees</h1></i></legend>
<form method="post" action="payment.php">
            <table>
                <tr>
                    <td>Employee Username</td>
                    <td><input type="text" name="uname"></td>
                </tr>
                <tr>
                    <td>Payment Month</td>
                    <td><input type="text" name="month"></td>
                </tr>
                <tr>
                    <td>Payment Date</td>
                    <td><input type="text" name="date"></td>
                </tr>
                <tr>
                    <td>Amount of Salary</td>
                    <td><input type="text" name="salary"></td>
                </tr>
                <!--<tr>
                    <td><input type="submit" name="back" value="Back"></td>
                    <td><input type="submit" name="pay" value="Pay"></td>
                </tr>-->
            </table>
            <input type="submit" name="back" value="Back">
            <input type="submit" name="pay" value="Pay">
        </form>
</body>
</html>
<?php
	session_start();
	$hrname=$_SESSION['uname'];
	if(isset($_POST['back'])){
		$_SESSION['uname'] = $hrname;
		header("location: hrhome.php");
	}
	elseif (isset($_POST['pay'])) {
		$month = $_POST['month'];
		$date = $_POST['date'];
		$amount = $_POST['salary'];
		$db = mysqli_connect("localhost", "root", "","payrollsystem");
		$empname = $_POST['uname'];
        $sql = "SELECT * FROM emp WHERE username = '$empname'";
        $ver = mysqli_query($db, $sql);
        if(mysqli_num_rows($ver) == 1){
			$db2 = mysqli_connect("localhost", "root", "","payrollsystem");
			$sql = "INSERT INTO salary(empuname, month, date, amount, payment_by) VALUES ('$empname', '$month', '$date', '$amount', '$hrname')";
	        mysqli_query($db2, $sql);
	        echo "Payment done for ".$empname."<br>";
	    }else{
	    	echo "Invalied Employee Username";
	    }
	}
?>
</fieldset></center>
	