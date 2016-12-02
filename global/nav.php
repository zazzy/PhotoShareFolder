
<div id="nav">
<ul>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);


    if(isset($_SESSION['username'])) {
        ?>
        <li><a href="?page=home">Home</a></li>
        <li><a href="?page=profile">Profile</a></li>
        <li><a href="?page=gallery">Gallery</a></li>

        <li><a href="?page=about">About</a></li>
        <li><a href="?page=logout">Logout</a></li>
        <?php
    }elseif(!isset($_SESSION['username'])) {
        ?>
        <li><a href="?page=home">Home</a></li>
        <li><a href="?page=gallery">Gallery</a></li>

        <li><a href="?page=login">Login</a></li>
        <li><a href="?page=register">Register</a></li>
        <li><a href="?page=about">About</a></li>

        <?php
    }elseif($_SESSION['id']=="1"){
    ?>
        <li><a href="?page=home">Home</a></li>
        <li><a href="?page=profile">Profile</a></li>
        <li><a href="?page=gallery">Gallery</a></li>
        <li><a href="?page=admin">ADMIN</a></li>
        <li><a href="?page=about">About</a></li>
        <li><a href="?page=logout">Logout</a></li>
    <?php}else{echo "NAV ERROR";}  ?>
</ul>
</div>
<div id ="full_spacer">

</div>
<div id = "content">