<?php
include("db/connect.php");



    if(function_exists($_GET['method'])){
        $_GET['method']();
    }


function getAllUsers(){
    global $db;
    $user_sql = mysqli_query($db,"select * from USER");
    $users = array();

    while($singleUser = mysqli_fetch_array($user_sql)){
        $users[] = $singleUser;
    }
    $users = json_encode($users);
    echo $_GET['jsoncallback'] . '(' . $users . ')';
}

