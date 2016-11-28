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
 
    <div id="Header">
        <ul>
            <?php include('global/header.php');?>

        </ul>
    </div>
    
    
    <div id="nav">

            <?php include('global/nav.php') ?>

    </div><!-- NAV -->

    
        <?php

        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = '';
        }

        switch($page){
            case "home";
                include 'home.php';
                break;
            case "profile";
                include 'profile.php';
                break;
            case "gallery";
                include 'gallery.php';
                break;
            case "login";
                include 'login.php';
                break;
            case "register";
                include 'register.php';
                break;
            case "about";
                include 'about.php';
                break;
            default:
                echo "default";
                break;
        }

        //echo "<a href=''>link</a>";
        echo $page;
        ?>

</html>