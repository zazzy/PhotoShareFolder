<?php

session_start();

?>
<html>
<head>
    <title>Admin</title>
</head>
<body>

<?php

echo "TESTTTTT";
$query = mysql_query("select name from user");

echo "<table>";
while($rows = mysql_fetch_array($query)) {
    echo"<tr>
<td> Username: </td >
</tr>";
}
echo"<tr>
<td> TEST TABLE: </td >
</tr>";
echo "</table>";

?>

</div>
</body>
</html>