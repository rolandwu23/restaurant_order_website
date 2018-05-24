<html>
<head>
 <title>View Database Record</title>
</head>
<body>
<p>Main Screen</p>
<hr>
<p><a href=view.php>View Database Record</a></p>
<p><a href=add.php>Add New Database Record</a></p>
<p><a href=edit.php>Edit Database Record</a></p>
<p>Delete Database Record</p>
<p><a href="logout.php">Log Out</a></p>
<hr>
<p>Delete Database Record</p>
<hr>
<?php

//database connection
$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'assign';
$table_name = 'assign_order';
$conn= mysqli_connect($host,$user,$passwd,$database);
mysqli_select_db($conn,$database);
$id = $_POST["id"];

$query = "SELECT * FROM $table_name WHERE id='".$id."'";
$sql = "DELETE FROM $table_name WHERE id='".$id."'";
mysqli_select_db($conn,$database);
$result = mysqli_query($conn,$query);

$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
if (!$myrow){
 print "<p>No such record</p>";
}
else {
 mysqli_query($conn,$sql);

}
mysqli_close($conn);

 ?>
</body>
</html>
