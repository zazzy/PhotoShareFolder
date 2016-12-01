<!DOCTYPE html>
<html>
<head></head>
<body

<section id ="photo_view">
<?php
include("./db/connect.php");

$PDO = new PDO($dsn,"b7716a5fb7c215","2471e43b096d840");
$handler = $PDO->prepare("select * from image");

$handler->execute();

while($row = $handler->fetch(PDO::FETCH_ASSOC)) {
    $image = $row['imgurl'];
    echo "<img src=./" . $image . ">";
}
    ?>
    </section>
</body>
</html>
