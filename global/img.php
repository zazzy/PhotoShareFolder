<?php

include("../db/connect.php");

$handle = new PDO($dsn,"b7716a5fb7c215","2471e43b096d840");
$sthandler = $handle->prepare("select * from image where user_id =".$_SESSION['id']);

$sthandler->execute();

while($row = $sthandler->fetch(PDO::FETCH_ASSOC)){
    $image=$row['imgurl'];
    echo "<img src=".$image."/>";
}



?>