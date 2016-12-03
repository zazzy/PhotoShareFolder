<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
include("./db/connect.php");

?>
<html>
<head>
    <title>Admin</title>
</head>
<body>

<?php


$query = mysqli_query($db,"select * from user");

echo "<table>";
while($rows = mysqli_fetch_array($query)) {
    echo"<tr>
<td> Username: </td >
<td> ".$rows['name']." </td >
</tr>

<tr>
<td> ID: </td>
<td> ".$rows['id']." </td>
</tr>

<tr>
<td> Role: </td>
<td> ".$rows['role']." </td>
</tr>
<tr>
<td> </td>
</tr>";
}
echo "</table>";
echo "<form method='post' enctype='multipart/form-data'>";
echo "<select>";
while($rs=mysqli_fetch_array($query)){
    echo $rs['name'];
echo "<option name= 'usertoban' value ='test'>test</option>";
}
echo "<option name= 'usertoban' value ='11test'>te11st</option>";
echo "<option name= 'usertoban' value ='11test'>".$rs['name']."</option>";
echo "<option name= 'usertoban' value ='11test'>te11st</option>";
echo '</select>';
echo '<input name="update" type="submit" autofocus>';
echo '</form>';
if(isset($_POST["update"])){
    $user = $_POST['usertoban'];
    mysqli_query($db,"update user set role=10 where id=".$user);
}


?>



</div>
</body>
</html>