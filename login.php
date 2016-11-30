<?php

if(isset($_POST['login'])) {
    include("./db/connect.php");
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    $username = stripslashes($username);
    $password = stripcslashes($password);

    $username = mysqli_real_escape_string($db,$username);
    $password = mysqli_real_escape_string($db,$password);

    $password = md5($password);

    $sql = "select * from user WHERE name='$username' LIMIT 1";
    $query = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($query);
    $id = $row['id'];
    $db_password = $row['password'];


    if($password == md5($db_password)){
        $_SESSION['username']= $username;
        $_SESSION['id'] = $id;
        //header("Location: index.php");
        echo "Logged in\n";
        echo $row['username'];
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


<form action="login.php" method="post" enctype="multipart/form-data">
    <input placeholder="Username" name="username" type="text" autofocus>
    <input placeholder="Password" name="password" type="password" autofocus>
    <input name="login" type="submit" autofocus>
</form>

</div>
</body>
</html>