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

<script>
    $(function(){
        $.getJSON("http://photoshare1418132.azurewebsites.net/api.php?method=getAllUsers&jsoncallback=?")
        function(data){
            for(person in data){
                var user = data[aUser];
                console.log(person.name + "" + person.role)
            }
        }
        );
    });
</script>



</body>
</html>
