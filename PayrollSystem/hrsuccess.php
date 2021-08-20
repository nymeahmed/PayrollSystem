<?php
    session_start();
    if(isset($_SESSION['fname']) && $_SESSION['lname'] && $_SESSION['uname'] && $_SESSION['gender']
       && $_SESSION['number'] && $_SESSION['address'] && $_SESSION['email'] ) {
        echo "<b>Welcome ".$_SESSION['fname']." ".$_SESSION['lname']."</b><br>";
        echo "You have been successfully registered in the system<br>";
        echo "Your username is: ".$_SESSION['uname']."<br>";
        echo "Your gender is: ".$_SESSION['gender']."<br>";
        echo "Your number is: ".$_SESSION['number']."<br>";
        echo "Your address is: ".$_SESSION['address']."<br>";
        echo "Your email is: ".$_SESSION['email']."<br>";
        echo "Please logout and log back in.<br>";
        echo "<a href='hrlogout.php'>Logout</a>";
    }else {
        header("location: home.php");
    }
?>