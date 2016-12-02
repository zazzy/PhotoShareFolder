
<div id="nav">
<ul>
    <?php
    if(isset($_SESSION['username'])) {
        ?>
        <li><a href="?page=home">Home</a></li>
        <li><a href="?page=profile">Profile</a></li>
        <li><a href="?page=gallery">Gallery</a></li>

        <li><a href="?page=about">About</a></li>
        <li><a href="?page=logout">Logout</a></li>
        <?php
    }
    if(!isset($_SESSION['username'])) {
        ?>
        <li><a href="?page=home">Home</a></li>
        <li><a href="?page=gallery">Gallery</a></li>

        <li><a href="?page=login">Login</a></li>
        <li><a href="?page=register">Register</a></li>
        <li><a href="?page=about">About</a></li>

        <?php
    }
    if(isset($_SESSION['id']) && $_SESSION['id']=="1"){
    ?>
        <li><a href="?page=home">Home</a></li>
        <li><a href="?page=profile">Profile</a></li>
        <li><a href="?page=gallery">Gallery</a></li>
        <li><a href="?page=admin">ADMIN</a></li>
        <li><a href="?page=about">About</a></li>
        <li><a href="?page=logout">Logout</a></li>
    <?php } ?>
</ul>
</div>
<div id ="full_spacer">

</div>
<div id = "content">