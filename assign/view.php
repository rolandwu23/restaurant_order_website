<html>
<head>
 <title>View Database Record</title>
</head>
<body>
<p>Main Screen</p>
<hr>
<p>View Database Record</p>
<p><a href=add.php>Add New Database Record</a></p>
<p><a href=edit.php>Edit Database Record</a></p>
<p><a href=delete.php>Delete Database Record</a></p>
<p><a href="logout.php">Log Out</a></p>
<hr>
<p>View Database Record</p>
<hr>
<?php

//database connection
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'assign';
$table_name = 'assign_order';
$con=mysqli_connect($host,$user,$password,$database);
if($con->connect_error){
  die("connection failed");
}
else{
  echo("connected successfully");
}


$query = "SELECT * FROM assign_order";
mysqli_select_db($con,$database);
$result = mysqli_query($con,$query);

if ($result) {
 print '<table border=1>';
 print '<th>ID<th>Name<th>Ph No<th>Email<th>Age<th>Item<th>Quantity';
 while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
 print '<tr>';
 foreach ($row as $field) {
print "<td>$field</td> ";
 }
 print '</tr>';
 }
} else { die ("Query=$query failed!"); }
mysqli_close($con);
?>
</body>
</html>
