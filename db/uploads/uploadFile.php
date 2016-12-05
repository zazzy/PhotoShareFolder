<?php
error_reporting(E_ALL);
ini_set('display_errors',1);


if(isset($_POST['usubmit'])&&$_FILES['photoupload']['size']>0) {
    $allowed_extension = array("image/jpeg","image/jpg");

    if (!in_array($_FILES['photoupload']['type'], $allowed_extension)) {
        echo "Invalid file type, JPG or PNG only " . $_FILES['photoupload']['type'];
    } else {
        echo "VALID FILE";



            $folder = "img/";

            $fileName = $_POST["upload_name"];
            $fileSize = $_FILES['photoupload']['size'];
            $filePrice = $_POST['upload_price'];
            $fileDescription = $_POST['upload_description'];
            $filePrice = $_POST['upload_price'];
            $fileUserID = $_SESSION['id'];
            $fileTempName = $_FILES['photoupload']['tmp_name'];

        $fileName = strip_tags($fileName);
        $fileName = stripslashes($fileName);
        $fileName = mysqli_real_escape_string($db,$fileName);

        $fileDescription = strip_tags($fileDescription);
        $fileDescription = stripslashes($fileDescription);
        $fileDescription = mysqli_real_escape_string($db,$fileDescription);



            $upload_image = $folder.basename($_FILES['photoupload']["name"]);
            /* try to move file PLEASSSEEE WORK */
            if(move_uploaded_file($fileTempName,$upload_image)) {
                echo " File uploaded";

                $query = "insert into image(user_id,file_name,Description,price,imgurl)" .
                    "values('$fileUserID','$fileName','$fileDescription','$filePrice','$upload_image')";

                $handle = new PDO($dsn,"b7716a5fb7c215","2471e43b096d840");
                $handle->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $insert = $handle->prepare($query);
                $insert->execute();
                /*   ---Bad code choice, use PDO API instead :)---
                $handle = fopen($fileTempName, "r");
                $toUpload = fread($handle, filesize($fileTempName));
                $toUpload = addslashes($fileName);
                fclose($handle);
                */


                /*mysql_query($query);*/

            }

    }

}else{

}


?>