<html>
<head>
    <title>Login</title>
</head>
<body>

<section id ="photo_view">
    <?php
    include("./db/connect.php");

    $PDO = new PDO($dsn,"b7716a5fb7c215","2471e43b096d840");
    $handler = $PDO->prepare("select * from image where user_id =".$_SESSION['id']);

    $handler->execute();
    $userHandler = $PDO->prepare("select * from user");
    $userHandler->execute();
    $imageU = "UN";
    while($row = $handler->fetch(PDO::FETCH_ASSOC)){
        $image=$row['imgurl'];
        $imageName = $row['file_name'];
        $imageDesc =$row['Description'];

        while($row2 = $userHandler->fetch(PDO::FETCH_ASSOC)){
            if($row2['id']==$row['user_id']){
                $imageU =$row2['name'];
            }}



        $imagePrice = $row['price'];
        echo "<div id = fullholder>";
        echo "<img id ='userImg' src=./".$image.">";
        echo "<div id = fullholderDetails><table>";

        $imageInfo = exif_read_data("./".$image,"computed",false,false);

        $imageInfoArray = array_values($imageInfo);
        echo "<tr><td>Name: ".$imageName."</td><tr>";
        echo "<tr><td>Desc: ".$imageDesc."</td><tr>";

        echo "<tr><td>User: " .$imageU."</td><tr>";

        echo "<tr><td>Price: ".$imagePrice."</td><tr>";
        echo "<tr><td>Meta: ".$imageInfoArray[3]."x".$imageInfoArray[4]."</td></tr>";
        echo "</table></div>";
        echo "</div>";
    }

    ?>



</section>
</div>
</body>
</html>
