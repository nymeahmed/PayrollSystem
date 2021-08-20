<fieldset>
<?php
    session_start();
    $name=$_SESSION['uname'];
    if(isset($_POST['back'])){
        $_SESSION['uname'] = $name;
        header("location: addemp.php");
    }
?>
<?php
    if(isset($_SESSION['uname2']) && $_SESSION['password2'])
    {
        echo "<b>Successfully Adding an Employee</b><br> <br>";
        echo "Employee username is: ".$_SESSION['uname2']."<br>";
        echo "Employee password is: ".$_SESSION['password2']."<br>";
    }
    else 
        echo "<b>No employee added</b>";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Adding Success</title>
</head>
<body>
    <form method="post" action="addempsuccess.php">
        <br>
        <input type="submit" name="back" value="Back">
    </form>
</body>
</html>
</fieldset>