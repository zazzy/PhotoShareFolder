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

    <script type='text/javascript'>
        var name = "<?php echo $_SESSION['username'] ?>";
    </script>
    <div id ="chatBox"></div>
    <?php
    if(file_exists("log.html") && filesize("log.html")>0){
        $handle = fopen("log.html","r");
        $contents = fread($handle,filezise("log.html"));
        fclose($handle);

        echo $contents;
    }

    ?>


    <form name = "message" action ="">
        <input name= "msg" type="text" id="msg"/>
        <input name ="submitmsg" type="submit" id="submitmsg" value="Send"/>
    </form>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type ="text/javascript">
        setInterval(loadLog,2000);
        /*
         $("#submitmsg").click(function(){
         var userMsg = $('#msg').val();
         $.post("post.php",{text:userMsg});
         $("#msg").attr("value","");
         return false;

         });
         function loadLog(){
         $var oldHeight = $('#chatBox').attr("scrollHeight")-20;
         $.ajax({
         url:"log.html",
         cache:false,
         success:function(html){
         $("#chatBox").html(html);
         var newHeight = $('chatBox').attr("scrollHeight")-20;
         if(newHeight>oldHeight){
         $('#chatBox').animation({scrollTop: newHeight},'normal');
         }
         }
         });
         }

         */

    </script>

</div>
<section id ="photo_view">
    <?php
    include("./db/connect.php");

    $PDO = new PDO($dsn,"b7716a5fb7c215","2471e43b096d840");
    $handler = $PDO->prepare("select * from image where user_id =".$_SESSION['id']);

    $handler->execute();

    while($row = $handler->fetch(PDO::FETCH_ASSOC)){
    $image=$row['imgurl'];
    echo "<img src=./".$image.">";
    }
?>


</section>
</body>
</html>

<?php

?>