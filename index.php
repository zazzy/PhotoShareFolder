<!--
getdone:
-Login php and logout page done, direct to logout to logout
make dynamic navigation
-profiles
-register
-upload
-purchase with paypal
-gallery
-->
<!DOCTYPE html>
    <html>
    <head>

    </head>
    <body>
    <h2>Home</h2>
    <div id="Header">
        <ul>
            <?php include('global/header.php');?>

        </ul>
    </div>
    <div id="nav">
        <ul>
            <?php include('global/nav.php') ?>
            <li><a href="?page=gallery">Gallery</a></li>
        </ul>
    </div><!-- NAV -->


    <p>
        <?php

        //echo "<a href=''>link</a>";

        ?>
    </p>
    </body>
</html>