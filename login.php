
<?php
session_set_cookie_params(86400);
session_start();

if(isset($_POST['login'])) {
    include("./db/connect.php");
    $salt = "1238ImTheBoy23o";
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password'].$salt);

    $username = stripslashes($username);
    $password = stripcslashes($password);

    $username = mysqli_real_escape_string($db,$username);
    $password = mysqli_real_escape_string($db,$password);

    $password = md5($password);

    $sql = "select * from user WHERE name='$username' LIMIT 1";
    $query = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($query);
    $id = $row['id'];
    $role = $row['role'];
    $db_password = $row['password'];


    if($password == $db_password){
        $_SESSION['username']= $username;
        $_SESSION['id'] = $id;
        $_SESSION['role']= $role;
        //header("Location: index.php");
        echo "Logged in\n";
        echo $_SESSION['username'];
        header("Refresh:0");
    }else{
        echo "Incorrect details\n";
    }
}
?>

<html>
<head>
    <title>Login</title>
</head>
<body>


<form action="" method="post" enctype="multipart/form-data">
    <input placeholder="Username" name="username" type="text" autofocus>
    <input placeholder="Password" name="password" type="password" autofocus>
    <input name="login" type="submit" autofocus>
</form>

</div>
</body>
</html>