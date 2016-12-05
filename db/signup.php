<?php
session_set_cookie_params(86400);
session_start();
//if(isset($_POST['submit'])) {
    include("./connect.php");

//}


?>

<html>
    <head>
        <title>Signing Up</title>
    </head>
    <body>

    <?php
    $salt = "1238ImTheBoy23o";

    if(isset($_POST['submit'])) {


        $username =$_POST['username'];
        $password =md5($_POST['password'].$salt);
        $username = strip_tags($username);
        $username = stripslashes($username);
        $username = mysqli_real_escape_string($db,$username);

        $password = strip_tags($password);
        $password = stripslashes($password);
        $password = mysqli_real_escape_string($db,$password);

        $confirmpassword =md5($_POST['confirm_password'].$salt);
        $confirmpassword = strip_tags($confirmpassword);
        $confirmpassword = stripslashes($confirmpassword);
        $confirmpassword = mysqli_real_escape_string($db,$confirmpassword);
        if(empty($username)||empty($password)||empty($confirmpassword)) {
            echo "Empty Field!";
        }elseif ($password!=$confirmpassword){
            echo "Password match error!";
        }else{
            $sql ="insert into user(name,password)
            values ('$username','$password')";
            $query=mysqli_query($db,$sql);
            if(!$query){
                printf("DEAD1: %s\n", mysqli_error($db));
            }else{
                $sql = "select * from user WHERE name='$username' LIMIT 1";
                $query = mysqli_query($db,$sql);
                $row = mysqli_fetch_array($query);
                $id = $row['id'];
                $db_password = $row['password'];
                print "Data inserted correctly";
                $_SESSION['username']=$username;
                $_SESSION['id'] = $id;
                $_SESSION['role']= $row['role'];
                header("Location: http://photoshare1418132.azurewebsites.net/index.php?page=profile");
            }
        }
    }
    ?>
    <meta http-equiv="refresh" content="index.php" >
    </body>

</html>
