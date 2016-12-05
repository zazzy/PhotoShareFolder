<html>
<head>
    <title>Login</title>
</head>
<body>

<section id ="photo_view">
    <?php
    include("./db/connect.php");

    $PDO = new PDO($dsn,"b7716a5fb7c215","2471e43b096d840");
    $handler = $PDO->prepare("select * from image ti INNER JOIN user ut on ti.user_id = ut.id");

    $handler->execute();
    $userHandler = $PDO->prepare("select * from user");
    $userHandler->execute();
    $imageU = "UN";
    $row2 = $userHandler->fetch(PDO::FETCH_ASSOC);
    while($row = $handler->fetch(PDO::FETCH_ASSOC)){
        $image=$row['imgurl'];
        $imageName = $row['file_name'];
        $imageDesc =$row['Description'];
        $imageU = $row['name'];




        $imagePrice= $row['price'];
        echo "<div id = fullholder>";
        echo "<img id ='userImg' src=./".$image.">";
        echo "<div id = fullholderDetails><table>";
        try {
            $imageInfo = exif_read_data("./" . $image, "computed", false, false);
        }catch (Exception $e){
            $imageInfo=null;
        }
        if(isset($imageInfo)) {
            $imageInfoArray = array_values($imageInfo);
        }else{
            $imageInfoArray=null;
        }
        echo "<tr><td>Name: ".$imageName."</td><tr>";

        echo "<tr><td>User: " .$imageU."</td><tr>";

        echo "<tr><td>Price: ".$imagePrice."</td><tr>";
        echo "<tr><td>";


        echo "</td></tr>";
        if(isset($imageInfoArray)) {
            echo "<tr><td>Meta Size: " . $imageInfoArray[2] . "</td></tr>";
        }else{
            echo "<tr><td>Image is not JPG</td></tr>";
        }
        echo "<tr><tr>"?>
        <form name="_xclick" action="https://www.sandbox.paypal.com/uk/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="robertharrisjjus@hotmail.co.uk">
            <input type="hidden" name="currency_code" value="GBP">
            <input type="hidden" name="item_name" value="<?php echo $imageDesc; ?>">
            <input type="hidden" name="amount" value="<?php echo $imagePrice; ?>">
            <input type="image" src="http://www.sandbox.paypal.com/en_GB/i/btn/x-click-but01.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
        </form>
        <? echo "</tr></td>";


        echo "</table></div>";

        echo "</div>";



    }?>






</section>
</div>
</body>
</html>
