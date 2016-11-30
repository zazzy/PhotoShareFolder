<?php
session_start()
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
    <div id="upload"
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
                <td><input type = "submit" name ="upload_submit" value="Post" id = "upload"/></td>
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
if(isset($_POST['upload'])&&$_FILES['photoupload']['size']>0) {
    $allowed_extension = array("image/png", "image/jpg");
    echo "FIRST IF PASS";
    if (!in_array($_FILES['photoupload']['type'], $allowed_extension)) {
        echo "Invalid file type, JPG or PNG only" . $_FILES['photoupload']['type'];
    } else {
        echo "VALID FILE";
        include("./db/connect.php");
        $fileName = $_FILES['photoupload']['name'];
        $fileSize = $_FILES['photoupload']['size'];
        $filePrice = $_POST['upload_price'];
        $fileDescription = $_POST['upload_description'];
        $filePrice = $_POST['upload_price'];
        $fileUserID = $_SESSION['id'];
        $fileTempName = $_FILES['photoupload']['tmp_name'];

        $handle = fopen($fileTempName, "r");
        $toUpload = fread($handle, filesize($fileTempName));
        $toUpload = addslashes($fileName);
        fclose($handle);

        $query = "insert into image(user_id,file_name,Description,price,imageblob)" .
            "values('$fileUserID','$fileName','$fileDescription','$filePrice','$toUpload')";
        mysqli_query($query) or die("FUCKK");
        echo "$fileName hopefully uploaded";

    }

}else{
    echo "FIRST IF FAIL";
}
?>