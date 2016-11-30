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
    if(isset($_POST['submit'])) {
        $username =$_POST['username'];
        $password =$_POST['password'];
        $confirmpassword =$_POST['confirm_password'];
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
            }
        }
    }
    ?>

    </body>

</html>
