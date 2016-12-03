<?php

session_start();

?>
<html>
<head>
    <title>Admin</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input placeholder="Username" name="username" type="text" autofocus>
    <input placeholder="Password" name="password" type="password" autofocus>
    <input name="login" type="submit" autofocus>
</form>

<?php
/*
$query = mysql_query("select * from user");

echo "<table>";
while($rows = mysql_fetch_array($query)) {
echo"    <tr>
<td > Username: </td >
<td > ".$rows['name']." </td >
</tr >

<tr >
<td > ID: </td >
<td > ".$rows['id']." </td >
</tr >

<tr >
<td > Role: </td >
<td > ".$rows['role']." </td >
</tr >";
}
echo "</table>";
*/
?>

</div>
</body>
</html>