<?php
session_start();
/*
error_reporting(E_ALL);
ini_set('display_errors',1);
*/
/* fucked fix me lol */
include("./db/connect.php");
include("./db/uploads/uploadFile.php");
?>
<!DOCTYPE html>
<html>
<head><title>PhotoShare - Profile</title></head>
<body>
<div id ="profile_details">
    <h3><?php if(isset($_SESSION['username'])){
            echo ucfirst(strtolower($_SESSION['username'])).'\'s Gallery';
        }else {
            echo "Username";
        }
        ?></h3>
    <div id="upload_form_div">
    <form name="uploadform" action="" method="POST" enctype="multipart/form-data">
        <table id ="upload_table">
            <tr>
                <td>Upload Name</td>
                <td><input type = "text" name ="upload_name"/></td>
            </tr>
            <tr>
                <td>Upload Description</td>
                <td><input type = "text" name ="upload_description"/></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type = "number" name ="upload_price"/></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type = "hidden" name ="max_size" value="2000000"/>
                <input name = "photoupload" type="file" id ="photoupload"</td>
            </tr>

            <tr>
                <td><input type = "submit" name ="usubmit" value="Upload""/></td>
            </tr>
        </table>
    </form>
    </div>


</div>
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
        echo "<tr><td>Desc: ".$imageDesc."</td><tr>";

        echo "<tr><td>User: " .$imageU."</td><tr>";

        echo "<tr><td>Price: ".$imagePrice."</td><tr>";
        echo "<tr><td>";


        echo "</td></tr>";
        if(isset($imageInfoArray)) {
            echo "<tr><td>Meta Size: " . $imageInfoArray[2] . "</td></tr>";
        }else{
            echo "<tr><td>Image is not JPG</td></tr>";
        }
        echo "</table></div>";

        echo "</div>";
        ?>
        <form name="_xclick" action="https://www.sandbox.paypal.com/uk/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="robertharrisjjus@hotmail.co.uk">
            <input type="hidden" name="currency_code" value="GBP">
            <input type="hidden" name="item_name" value="<?php echo $imageDesc; ?>">
            <input type="hidden" name="amount" value="<?php echo $imagePrice; ?>">
            <input type="image" src="http://www.sandbox.paypal.com/en_GB/i/btn/x-click-but01.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
        </form>
        <!--
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="NUNTL6W54KY9A">
            <input type="hidden" name="amount" value="99.99">
            <input type="hidden" name="item_name" value="">
            <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>-->

        <?

    }

?>



</section>
</body>
<!--
<div id="myImageHolder" class="holder">
    <span class="close" onclick="document.getElementById('myImageHolder').style.display='none'">&times;</span>
    <img class = "myImageHolderImage" id="userImageHeld">
    <div id="myImageData"></div>
</div>
-->
</html>
<!--
    <script type="text/javascript">
        window.onload=function() {
            var holder = document.getElementById('myImageHolder');
            var image = document.getElementById('userImg');
            var userImage = document.getElementById('userImageHeld');
            var imageData = document.getElementById('myImageData');
            image.onclick = function () {
                holder.style.display = "block";
                userImage.src = this.src;
                imageData.innerHTML = this.alt;

            }

             var span = document.getElementsByClassName("close")[0];
             span.onclick=function(){
             holder.style.display="none";
             }
        }
    </script>
 -->
<?php

?>