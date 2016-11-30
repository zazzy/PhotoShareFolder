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