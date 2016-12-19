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
    $myJson = json_encode($users, JSON_PRETTY_PRINT);
    echo $myJson;


}

function parseJsonAllUsers(){
    $position =$_GET['position'];
    $field =$_GET['field'];
    $req = file_get_contents('http://photoshare1418132.azurewebsites.net/api.php?method=getAllusers');
    $myDecode = json_decode($req,true);

    var_dump($myDecode[$position][$field]);
}


function getAllImages()
{
    global $db;
    $user_sql = mysqli_query($db, "select file_name,Description from image");
    $users = array();

    while ($row = mysqli_fetch_assoc($user_sql)) {
        $users[] = $row;
    }
    echo json_encode($users, JSON_PRETTY_PRINT);

}

function parseJsonAllImages(){
    $position =$_GET['position'];
    $field =$_GET['field'];
    $req = file_get_contents('http://photoshare1418132.azurewebsites.net/api.php?method=getAllImages');
    $myDecode = json_decode($req,true);

    var_dump($myDecode[$position][$field]);
}

function getAllUsersObj()
{
    global $db;
    $user_sql = mysqli_query($db, "select name,role,id from USER");
    $users = array();

    while ($row = mysqli_fetch_assoc($user_sql)) {
        $users[] = $row;
    }

    echo json_encode($users, JSON_FORCE_OBJECT);

}

function parseJsonAllImagesObj(){
    $position =$_GET['position'];
    $field =$_GET['field'];
    $req = file_get_contents('http://photoshare1418132.azurewebsites.net/api.php?method=getAllImagesObj');
    $myDecode = json_decode($req,true);

    var_dump($myDecode[$position][$field]);
}


function getAllImagesObj()
{
    global $db;
    $user_sql = mysqli_query($db, "select file_name,Description from image");
    $users = array();

    while ($row = mysqli_fetch_assoc($user_sql)) {
        $users[] = $row;
    }
    echo json_encode($users, JSON_FORCE_OBJECT);

}

?>

