<?php
    session_start();
if($_POST['login']) {
    include("./db/connect.php");
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    $username = stripslashes($username);
    $password = stripcslashes($password);

    $password = md5($password);

    $sql = "select * from user WHERE name='$username' LIMIT 1";
    $query = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($query);
    $id = $row['id'];
    $db_password = $row['password'];

    if($password = $db_password){
        $_SESSION['username']= $username;
        $_SESSION['id'] = $id;
        header("Loaction: index.php");
    }else{
        echo "Incorrect details";
    }
}
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
<hr>
<a href="?page=Home">Home</a>
<a href="?page=Profile">Profile</a>
<a href="?page=Gallery">Gallery</a>

<a href="?page=SignUp">Sign Up</a>

<p>

<form action="login.php" method="post" enctype="multipart/form-data">
    <input placeholder="Username" name="username" type="text" autofocus>
    <input placeholder="Password" name="password" type="text" autofocus>
    <input name="login" type="submit" autofocus>
</form>

</body>
</html>