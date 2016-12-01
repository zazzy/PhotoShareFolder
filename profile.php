<?php
session_start();
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
    <div id="upload">
    <form name="uploadform" action="" method="POST" enctype="multipart/form-data">
        <table>
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
    <img src="./img/img1.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img1.jpg"/>
    <img src="./img/img3.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img3.jpg"/>
    <img src="./img/img3.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img1.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img3.jpg"/>
    <img src="./img/img1.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img3.jpg"/>
    <img src="./img/img1.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img3.jpg"/>
    <img src="./img/img3.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img1.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img3.jpg"/>
    <img src="./img/img1.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img1.jpg"/>
    <img src="./img/img3.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img3.jpg"/>
    <img src="./img/img3.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img1.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img2.jpg"/>
    <img src="./img/img3.jpg"/>

</section>
</body>
</html>

<?php

?>