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
$query = mysqli_query($db,"select name from user");

echo "<table>";
while($rows = mysqli_fetch_array($query)) {
    echo"<tr>
<td> Username: </td >
</tr>";
}
echo"<tr>
<td> TEST TABL111E: </td >
</tr>";
echo "</table>";

?>

</div>
</body>
</html>