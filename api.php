<?php
include("db/connect.php");
header('Content-type: text/javascript');


    if(function_exists($_GET['method'])){
        $_GET['method']();
    }


function getAllUsers()
{
    global $db;
    $user_sql = mysqli_query($db, "select name,role,id from USER");
    $users = array();

    while ($row = mysqli_fetch_assoc($user_sql)) {
        $users[] = $row;
    }

    echo json_encode($users, JSON_PRETTY_PRINT, JSON_FORCE_OBJECT);

}

function getAUser()
{
    $UN = $_GET['user'];
    global $db;
    $user_sql = mysqli_query($db, "select name,role,id from USER where name ='$UN'");
    $users = array();

    while ($row = mysqli_fetch_assoc($user_sql)) {
        $users[] = $row;
    }
    echo json_encode($users, JSON_PRETTY_PRINT,JSON_FORCE_OBJECT);

}

function getAllImages()
{
    global $db;
    $user_sql = mysqli_query($db, "select file_name,Description from image");
    $users = array();

    while ($row = mysqli_fetch_assoc($user_sql)) {
        $users[] = $row;
    }
    echo json_encode($users, JSON_PRETTY_PRINT,JSON_FORCE_OBJECT);

}



?>

