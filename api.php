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
<html>
<head>
    <title>API</title>
</head>
<body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type ="text/javascript">
    $(function(){

        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'http://photoshare1418132.azurewebsites.net/api.php?method=getAllUsers',
            success: function (data) {
                for(users in data){
                    var allUsers = data[users];
                    console.log(allUsers)
                }
                //  console.dir('success', data);
            }
        })
    });
    //$.getJSON("http://photoshare1418132.azurewebsites.net/api.php?method=getAllUsers&jsoncallback=?");



</script>



</body>
</html>

