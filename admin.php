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

if(isset($_SESSION['id'])){
if($_SESSION['role']=="1"){




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
echo "<select name='usertoban'>";

$query1 = mysqli_query($db,"select * from user");
while($rs=mysqli_fetch_array($query1)){
    echo "<option value =".$rs['id'].">".$rs['name']."</option>";

}
echo '</select>';
echo "<select name='changeid'>";
echo "<option value ='0'>Shopper</option>";
echo "<option value ='10'>Banned</option>";
echo "<option value ='2'>Photographer</option>";
echo "</select>";

echo '<input name="update" type="submit" autofocus>';
echo '</form>';

if(isset($_POST["usertoban"])){
    $user = $_POST['usertoban'];
    echo "USER ID:".$user ."updated";
    mysqli_query($db,"update user set role=".$_POST['changeid']." where id=".$user);
    header("refresh:1");
}
}
}

?>



</div>
</body>
</html>