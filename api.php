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
            url: 'http://photoshare1418132.azurewebsites.net/api.php?method=getAllUsers&jsoncallback=?',
            success: function (data) {
                for(person in data){
                    var user = data[person]
                    console.log(user.name)
                }
              //  console.dir('success', data);
            }
            })
        });
        //$.getJSON("http://photoshare1418132.azurewebsites.net/api.php?method=getAllUsers&jsoncallback=?");



</script>



</body>
</html>
