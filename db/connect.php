<?php
/**
 * Created by PhpStorm.
 * User: 1418132
 * Date: 28/11/2016
 * Time: 16:11
 */

$db = new mysqli(
    "us-cdbr-azure-southcentral-f.cloudapp.net", //db host
    "b7716a5fb7c215", //username
    "2471e43b096d840", //pass
    "ps1418132"  //db name
);

if (mysqli_ping($db)) {
    /*printf ("LIVE\n");*/
} else {
    printf ("DEAD: %s\n", mysqli_error($db));
}