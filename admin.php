<?php

session_start();

?>
<html>
<head>
    <title>Admin</title>
</head>
<body>

<?php

$query = mysql_query("select * from user");

echo "<table>";
while($rows = mysql_fetch_array($query)) {
echo"    <tr>
<td > Username: </td >

</tr >";
}
echo "</table>";

?>

</div>
</body>
</html>