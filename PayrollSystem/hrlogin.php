<!DOCTYPE html>
<html>
    <head>
        <title>HR login</title>
    </head>
    <body>
        <center>
        <fieldset>
        <legend><i><h1>HR Login</h1></i></legend>
        <form method="post" action="hrlogin.php">
            <table>
                <tr>
                    <td>HR Username</td>
                    <td><input type="text" name="uname"></td>
                </tr>
                <tr>
                    <td>HR Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <!--<tr>
                    <td><input type="submit" name="back" value="Back"></td>
                    <td><input type="submit" name="login" value="Login"></td>
                </tr>-->
            </table>
            <input type="submit" name="back" value="Back">
            <input type="submit" name="login" value="Login">
        </form>
        <?php
            $db = mysqli_connect("localhost", "root", "","payrollsystem");
            if(isset($_POST['login'])) {
                session_start();
                $uname = $_POST['uname'];
                $password = md5($_POST['password']);
                $sql = "SELECT * FROM hr WHERE username='$uname' AND password='$password'";
                $verify = mysqli_query($db, $sql);

                if(mysqli_num_rows($verify) == 1){//   echo"Authentication";
                    $_SESSION['uname'] = $uname; //pass value
                    header("location: hrhome.php");
                }else{
                    $_SESSION['uname'] = $uname;
                    echo "Incorrect username/password combination <br>";
                    echo "<a href='forgethr.php'>Forget Password?</a>";
                }
            }
            elseif (isset($_POST['back'])) {
                header("location: home.php");
            }
        ?>
        </fieldset>
        </center>
    </body>
<html>