<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
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

    while($row = $handler->fetch(PDO::FETCH_ASSOC)){
    $image=$row['imgurl'];
        $imageName = $row['file_name'];
        $imageDesc =$row['Description'];
        $imageUID =$row['user_id'];
        $imagePrice = $row['price'];
        echo "<div id = fullholder>";
    echo "<img id ='userImg' src=./".$image.">";
        echo "<div id = fullholderDetails><table>";
        echo "<br>";
        echo "<tr><td>Name: ".$imageName."<td><td></td><tr>";
        echo "<tr><td>Description: ".$imageDesc."<td><td></td><tr>";
        echo "<tr><td>User ID: " .$imageUID."</td><td></td><tr>";
        echo "<tr><td>Price: ".$imagePrice."</td><td></td><tr>";
        echo "</table></div>";
        echo "</div>";
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