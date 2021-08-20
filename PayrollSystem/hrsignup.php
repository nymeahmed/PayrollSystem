<!DOCTYPE html>
<html>
<head>
	<title>HR Signup</title>
</head>
<body>
	<center>
                <fieldset>
		<legend><i><h1>HR Sign up</h1></i></legend>
		<form method="post" action="hrsignup.php">
			<div>
 				<label for="firstname">Firstname</label> <br>
 				<input type="text" name="firstname" placeholder="Firstname" required>
 			</div> <br>
 			<div>
 				<label for="lastname">Lastname</label> <br>
 				<input type="text" name="lastname" placeholder="Lastname" required>
 			</div> <br>
 			<div>
 				<label for="username">Username</label> <br>
 				<input type="text" name="username" placeholder="Username" required>
 			</div> <br>
 			<div>
 				<label for="gender">Gender</label>
 				<input type="radio" name="gender" value="male" required>
				<label for="male">Male</label>
				<input type="radio" name="gender" value="female" required>
				<label for="female">Female</label>
				<input type="radio" name="gender" value="other" required>
				<label for="other">Other</label>
			</div> <br>
 			<div>
 				<label for="number">Phone Number</label> <br>
 				<input type="tel" name="number" placeholder="Phone no" required>
 			</div> <br>
 			<div>
 				<label for="address">Current Address:</label> <br>
 				<textarea name="address" placeholder="Current Address" required></textarea>
 			</div> <br>
 			<div>
 				<label for="email">Email</label> <br>
 				<input type="email" name="email" placeholder="Enter Email" required>
 			</div> <br>
 			<div>
 				<label for="password">Password</label> <br>
 				<input type="password" name="password1" placeholder="Enter Password" required>
 			</div> <br>
                        <div>
                                <label for="password">Confirm Password</label> <br>
                                <input type="password" name="password" placeholder="Enter Password" required>
                        </div> <br>

        <?php
                $db = mysqli_connect("localhost", "root", "", "payrollsystem");
                if(isset($_POST['submit'])) {
                session_start();
                $fname = $_POST['firstname'];
                $lname = $_POST['lastname'];
                $uname = $_POST['username'];
                $gender = $_POST['gender'];
                $number = $_POST['number'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $password1 = md5($_POST['password1']);
                $password = md5($_POST['password']);
                if($password == $password1){
                        $sql = "INSERT INTO hr(firstname, lastname, username, gender, number, address, email, password ) VALUES('$fname', '$lname', '$uname', '$gender', '$number', '$address', '$email', '$password')";
                        mysqli_query($db, $sql); //data is inserted into the database
                        $_SESSION['fname']=$fname;
                        $_SESSION['lname']=$lname;
                        $_SESSION['uname']=$uname;
                        $_SESSION['gender']=$gender;
                        $_SESSION['number']=$number;
                        $_SESSION['address']=$address;
                        $_SESSION['email']=$email;
                        //$_SESSION['password']=$password;
                        header("location: hrsuccess.php");
                }else{
                        echo "Password doesn't match";
                }
                }
        ?>

 			<div>
 				<input type="submit" name="submit" value="Register">
 			</div>
		</form>
        </fieldset>
	</center>
</body>
</html>