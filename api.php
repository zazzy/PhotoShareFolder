<?php
include("db/connect.php");



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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type ="text/javascript">
    $(function(){

        $.ajax({
            type: 'GET',
            url: 'http://photoshare1418132.azurewebsites.net/api.php?method=getAllUsers&jsoncallback=?',
            success: function (data) {
                for(person in data){
                    var user = data[person];
                    console.log(user)
                }
                //  console.dir('success', data);
            }
        })
    });
    //$.getJSON("http://photoshare1418132.azurewebsites.net/api.php?method=getAllUsers&jsoncallback=?");



</script>
