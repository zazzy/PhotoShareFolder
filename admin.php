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

echo "TESTTTTT";
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
</tr>";
}

echo "</table>";

?>

</div>
</body>
</html>