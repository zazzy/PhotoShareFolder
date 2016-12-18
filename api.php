<?php
include("db/connect.php");
header('Content-type: text/javascript');


    if(function_exists($_GET['method'])){
        $_GET['method']();
    }


function getAllUsers()
{
    global $db;
    $user_sql = mysqli_query($db, "select * from USER");
    $users = array();

    while ($row = mysqli_fetch_assoc($user_sql)) {
        $users[] = $row;
    }
    echo json_encode($users);
}


?>

