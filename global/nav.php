
<div id="nav">
<ul>
    <li><a href="?page=home">Home</a></li>
    <li><a href="?page=gallery">Gallery</a></li>
    <?php
    if(!isset($_SESSION['username'])){
        echo '
    Your username is'.$_SESSION['username'].'
    <li><a href="?page=login">Login</a></li>
    <li><a href="?page=register">Register</a></li>
        ';
    }


    if(isset($_SESSION['username'])){
    echo 'help'.'
    <li><a href="?page=profile">Profile</a></li>
    <li><a href="?page=logout">Logout</a></li>
    ';
    }


    if($_SESSION['id']=="1"){
        echo 'admin'.'
    <li><a href="?page=admin">ADMIN</a></li>
    ';
    }
    ?>

    <li><a href="?page=about">About</a></li>


</ul>
</div>
<div id ="full_spacer">

</div>
<div id = "content">