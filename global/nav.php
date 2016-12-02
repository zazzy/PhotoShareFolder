

<?php
if(isset($_SESSION['username'])) {
    echo $_SESSION['username'];
?>
<div id="nav" xmlns="http://www.w3.org/1999/html">
<ul>

        <li><a href="?page=home">Home</a></li>
        <li><a href="?page=profile">Profile</a></li>
        <li><a href="?page=gallery">Gallery</a></li>

        <li><a href="?page=about">About</a></li>
        <li><a href="?page=logout">Logout</a></li>

</ul>
</div>

    <?php
}elseif(!isset($_SESSION['username'])) {
    ?>
    <div id ='nav'>
        <ul>

    <li><a href="?page=home">Home</a></li>
    <li><a href="?page=gallery">Gallery</a></li>

    <li><a href="?page=login">Login</a></li>
    <li><a href="?page=register">Register</a></li>
    <li><a href="?page=about">About</a></li>
        </ul>
</div>
    <?php
}elseif($_SESSION['id']=="1"){
    ?>
    <div id ='nav'>
        <ul>
    <li><a href="?page=home">Home</a></li>
    <li><a href="?page=profile">Profile</a></li>
    <li><a href="?page=gallery">Gallery</a></li>
    <li><a href="?page=admin">ADMIN</a></li>
    <li><a href="?page=about">About</a></li>
    <li><a href="?page=logout">Logout</a></li>
            </ul>
        </div>
<?php}else{echo "NAV ERROR";}  ?>
<div id ="full_spacer">

</div>
<div id = "content">