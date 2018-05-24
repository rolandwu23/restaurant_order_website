<html>
<head>
 <title>View Database Record</title>
</head>
<body>
<p>Main Screen</p>
<hr>
<p><a href=view.php>View Database Record</a></p>
<p><a href=add.php>Add New Database Record</a></p>
<p>Edit Database Record</p>
<p><a href=delete.php>Delete Database Record</a></p>
<p><a href="logout.php">Log Out</a></p>
<hr>
<p>Edit Database Record</p>
<hr>
<?php

$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'assign';
$table_name = 'assign_order';
$conn = mysqli_connect($host,$user,$passwd,$database);
mysqli_select_db($conn,$database);

$name="";
$phno="";
$email="";
$age="";
$item="";
$quantity="";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
$id=test_input($_POST["aid"]);
$name=test_input($_POST["aname"]);
$phno=test_input($_POST["aphno"]);
$email=test_input($_POST["aemail"]);
$age=test_input($_POST["aage"]);
$item=test_input($_POST["aitem"]);
$quantity=test_input($_POST["aquantity"]);
}

$sql="UPDATE $table_name SET name='$name', phno='$phno', email='$email', age='$age', item='$item', quantity='$quantity' WHERE id = '".$id."'";
mysqli_query($conn,$sql);
mysqli_close($conn);

?>
</body>
</html>
